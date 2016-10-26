<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Signup;
use App\Pot;

class AdminController extends Controller
{
    
    public function admin()
    {
    	$signups = Signup::all();
    	$pots = Pot::all();
    	return view('admin.all', compact(['signups', $signups], ['pots', $pots]));
    }

    public function viewSignup($auth_code)
    {
    	$signup = Signup::where('authorisation_code', $auth_code)->get()->first();
    	return view('admin.view-signup', compact($signup, 'signup'));
    }
}
