<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $guarded = [];

    /**
     * Relationship - Un Document appartient a un utilisateur
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
