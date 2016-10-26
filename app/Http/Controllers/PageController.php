<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Signup;
use App\User;

use App\Mail\PleaseConfirmSignup;
use App\Mail\SignupWasConfirmed;

class PageController extends Controller
{

    public function index()
    {
    	$count_signups = DB::table('signups')->get()->count();
    	// $count_pots = DB::table('pots')->get()->count();
    	// $total = $count_signups + $count_pots;
    	return view('home', compact('total', $count_signups));
    }

    public function getStarted()
    {
    	return view('signup.get-started');
    }

    public function increase()
    {
    	return view('increase');
    }
    
    public function unsure()
    {
    	return view('unsure');
    }

    public function enter()
    {
    	return view('signup.enter');
    }

    public function signup(Request $request)
    {

    	$isNewUser = empty($request->all()['user_id']);

		if ($isNewUser) {
			$user = $this->createUser($request->all());
		} else {
			$user = User::findOrFail($request->all()['user_id']);
		}

    	$signup = $this->createSignup($request, $user);

    	// Send a validation email?
    	if ($this->sendConfirmationEmail($user, $signup)) {
    		return view('unconfirmed');
    	} else {
    		dd("Oops, we couldn't send the email...");
    	}
    }

    public function createUser($request)
    {
    	$user = new User();
    	$user->first_name = $request['user_firstname'];
    	$user->last_name = $request['user_lastname'];
    	$user->email = $request['user_email'];
    	$user->save();
		return $user;
    }

    public function createSignup($request, $user)
    {
    	$signup = new Signup($request->all());
    	$signup->user_id = $user->id;
    	$signup->save();
		return $signup;
    }

    public function sendConfirmationEmail($user, $signup)
    {
    	// $to = 'hello@dougproctor.co.uk';
    	// $subject = 'Confirm your donation';
    	// $link = 'abc';
    	// $body = 'Confirm your donation: ' . $link;
    	// mail($to, $subject, $body);
    	Mail::to($user)->send(new PleaseConfirmSignup($user, $signup));
    	return true;
    }

    public function authoriseSignup($auth_code)
    {
    	$signup = Signup::where('authorisation_code', $auth_code)->get()->first();
    	$signup->authorised = true;
    	$signup->authorisation_timestamp = time();
    	if ($signup->save()) {
    		$user = $signup->user;
    		Mail::to($user)->send(new SignupWasConfirmed($user, $signup));
    		return view('finished');
    	}
    }
    
}
