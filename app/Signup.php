<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $fillable = [
        'amount',
        'increase',
        'user_name',
        'user_email',
        'charity_name',
        'charity_number',
        'charity_address',
    ];

    // public function user() {
    //     return $this->belongsTo('App\User');
    // }

    public static function boot()
    {
        parent::boot();
	    Signup::creating(function($signup)
		{
			$signup->authorisation_code = substr(str_shuffle(MD5(microtime())), 0, 32);
		});        
    }

}
