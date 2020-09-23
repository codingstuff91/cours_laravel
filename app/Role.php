<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Relationship - Un role peut etre lié a plusieurs utilisateurs
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
