<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    protected $tabe = 'comments';

    protected $fillable =[
        'likes',
        'post_id',
        'user_id',
        'comment'
    ];

    public function user(){

        return this->belongsTo(user::class,'user_id');
    }

    public function posts(){

        return this->belongsTo(post::class,'post_id');
    }
}
