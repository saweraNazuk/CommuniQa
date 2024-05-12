<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Filament\Panel;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\HasAvatar;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use App\Models\Role;

class User extends Authenticatable implements HasAvatar, FilamentUser
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use HasPanelShield;
    
    
    
   
    /**
     * The attributes that are mass assignable.
     *
     
     * @var array<int, string>
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
    protected $fillable = [
        'profile_photo_path',
        'name',
        'email',
        'id',
        'password',
        'google_id',
        'roles',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->profile_photo_url;
    }
    public function getRoleNamesAttribute(): ?string
    {
        return $this->roles->pluck('name');
    }
    // public function role_user() {
    //     return $this->belongsToMany(Role::class);
    // }

    // public function author()
    // {
    //     return $this->hasMany(ForumPosts::class);
    // }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'user_friends', 'user_id', 'friend_id')
            ->wherePivot('status', 'accepted');
    }

    public function friendRequests()
    {
        return $this->belongsToMany(User::class, 'user_friends', 'user_id', 'friend_id')
            ->wherePivot('status', 'pending');
    }

    public function forumposts()
{
    return $this->hasMany(ForumPosts::class);
}
}

