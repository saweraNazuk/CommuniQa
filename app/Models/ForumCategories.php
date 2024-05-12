<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ForumCategories extends Model
{
    use HasFactory;

    // protected $table = 'forum_categories';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'user_id',
        'title',
        'description',
        'profile_photo_url',
    ];
//   protected $table= `forum_categories`;
    protected $casts = [
        'tags' => 'array',
            'created_at' => 'datetime',
            
    
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getExcerpt(){
        return Str::limit(strip_tags($this->content), 150);
    }
   
   public function scopePublished($query)
   {
   $query->where('created_at','<=', Carbon::now());
}
}
