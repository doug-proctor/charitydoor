<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Signup;
use App\Pot;

use App\Mail\PleaseConfirmSignup;
use App\Mail\PleaseConfirmIncrease;
use App\Mail\PleaseConfirmPot;
use App\Mail\SignupWasConfirmed;
use App\Mail\IncreaseWasConfirmed;
use App\Mail\PotWasConfirmed;

class PageController extends Controller
{

    public function index()
    {
    	$count_signups = DB::table('signups')->get()->count();
    	$count_pots = DB::table('pots')->get()->count();
    	$total = $count_signups + $count_pots;
    	return view('home', compact('total', $total));
    }

    public function startPage()
    {
    	return view('signup.get-started');
    }

    public function increasePage()
    {
    	return view('increase.increase');
    }
    
    public function unsurePage()
    {
    	return view('signup.unsure');
    }

    public function enterPage()
    {
    	return view('signup.enter');
    }

    

    public function signup(Request $request)
    {
    	$signup = $this->createSignup($request);
    	if ($this->sendSignupConfirmationEmail($signup)) {
    		return view('signup.unconfirmed');
    	} else {
    		dd("Oops, we couldn't send the email...");
    	}
    }

    public function increase(Request $request)
    {
    	$increase = $this->createSignup($request);
    	if ($this->sendIncreaseConfirmationEmail($increase)) {
    		return view('increase.unconfirmed');
    	} else {
    		dd("Oops, we couldn't send the email...");
    	}
    }

    public function pot(Request $request)
    {
    	$pot = $this->createPot($request);
    	if ($this->sendPotConfirmationEmail($pot)) {
    		return view('pot.unconfirmed');
    	} else {
    		dd("Oops, we couldn't send the email...");
    	}
    }

    public function createSignup($request)
    {
    	$signup = new Signup($request->all());
    	$signup->save();
		return $signup;
    }

    public function createPot($request)
    {
    	$pot = new Pot($request->all());
    	$pot->save();
		return $pot;
    }

    public function sendSignupConfirmationEmail($signup)
    {
    	Mail::to($signup->user_email)->send(new PleaseConfirmSignup($signup));
    	return true;
    }

    public function sendIncreaseConfirmationEmail($increase)
    {
    	Mail::to($increase->user_email)->send(new PleaseConfirmIncrease($increase));
    	return true;
    }

    public function sendPotConfirmationEmail($pot)
    {
    	Mail::to($pot->user_email)->send(new PleaseConfirmPot($pot));
    	return true;
    }

    public function authoriseSignup($auth_code)
    {
    	$signup = Signup::where('authorisation_code', $auth_code)->get()->first();
    	$signup->authorised = true;
    	$signup->authorisation_timestamp = time();
    	
    	if ($signup->save()) {

    		if ($signup->increase == true) {
	    		Mail::to($signup->user_email)->send(new IncreaseWasConfirmed($signup));
	    		return view('increase.finished', compact('signup', $signup));
	    	} else {
				Mail::to($signup->user_email)->send(new SignupWasConfirmed($signup));
	    		return view('signup.finished', compact('signup', $signup));
	    	}
    	}
    }   

    public function authorisePot($auth_code)
    {
    	$pot = Pot::where('authorisation_code', $auth_code)->get()->first();
    	$pot->authorised = true;
    	$pot->authorisation_timestamp = time();
    	if ($pot->save()) {
    		Mail::to($pot->user_email)->send(new PotWasConfirmed($pot));
    		return view('pot.finished', compact('pot', $pot));
    	}
    }
}
