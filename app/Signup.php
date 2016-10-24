<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $fillable = [
        'amount',
        'charity_name',
        'charity_number',
        'charity_address',
    ];

    public function user() {
        return $this->hasOne('App\User');
    }
}
