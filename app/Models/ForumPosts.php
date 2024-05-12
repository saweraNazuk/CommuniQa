<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
class ForumPosts extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'name',
        'user_id',
        'content',
        'profile_photo_url',
    ];
//   protected $table= `forum_categories`;
    protected $casts = [
        'tags' => 'array',
            'created_at' => 'datetime',
            
    
    ];
    public function auther(){
        return $this->belongsTo(User::class);
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
    public function getExcerpt(){
        return Str::limit(strip_tags($this->content), 120);
    }
   
   public function scopePublished($query)
   {
   $query->where('created_at','<=', Carbon::now());
}


}
