<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['email', 'name' , 'password' ];

    protected $hidden = ['password', 'remember_token'];

    //Relationship
    public function articles()
    {
        $this->hasMany('App\Article');
    }
}
