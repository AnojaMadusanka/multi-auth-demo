<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
    protected $table = 'admin';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [       //not to return when return the model
      'password', 'remember_token',
    ];
}
