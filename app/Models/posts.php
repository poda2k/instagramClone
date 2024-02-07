<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'imagePath',
        'likes',
        'user_id'
    ];

    public function users(){
        
        return $this->belongsTo(User::class,'user_id');
    }

    public  function comments(){

        return $this->hasMany(Comment::class,'post_id');
    }
}
