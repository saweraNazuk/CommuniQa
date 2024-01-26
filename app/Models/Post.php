<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable =
    [
        'name',
        'user_id',
        'content',
       
    ];
    protected $casts = [
        'tags' => 'array',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
