<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pot extends Model
{
    protected $fillable = [
        'amount',
        'user_name',
        'user_email',
    ];

    public static function boot()
    {
        parent::boot();
	    Pot::creating(function($pot)
		{
			$pot->authorisation_code = substr(str_shuffle(MD5(microtime())), 0, 32);
		});        
    }
}
