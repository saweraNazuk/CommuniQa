<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable =
    [
        'name',
        'user_id',
        'title',
        'color',
        'content',
        'slug',
        'thumbnail',
        'published',
        'featured',
       'published_at',
    ];
    protected $casts = [
        'tags' => 'array',
            'published_at' => 'datetime',
            
    
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getExcerpt(){
        return Str::limit(strip_tags($this->content), 150);
    }
   
   public function scopePublished($query)
   {
   $query->where('published_at','<=', Carbon::now());
}
public function scopeFeatured($query)
{
$query->where('featured', true);
}

// #[SearchUsingPrefix(['status'])]
// public function toSearchableArray()
// {
//     return [
//        'title' => $this->title,
//        'content' => $this->content,
//     ];
// }
}
