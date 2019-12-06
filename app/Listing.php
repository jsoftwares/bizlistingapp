<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id', 'address', 'website', 'phone', 'email', 'bio'
    ];

    // Add One to on relationship

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
