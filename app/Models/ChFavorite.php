<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Chatify\Traits\UUID;

class ChFavorite extends Model
{
    use UUID;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'user_id',

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
