<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'avatar',
        'bio',
        'website',
        'title',
        'user_id'
    ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function following(){
        return $this->belongsToMany(User::class);
    }

}
