<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Relationship - Un utilisateur a plusieurs roles
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    /**
     * Relationship - Un utilisateur possede plusieurs documents
     */
    public function documents()
    {
        return $this->belongsToMany('App\Document');
    }
}
