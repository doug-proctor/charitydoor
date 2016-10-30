<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Signup;
use App\Pot;

use App\Mail\DonationWasConfirmed;
use App\Mail\DonationWasRequested;
use App\Mail\PotWasConfirmed;
use App\Mail\PotWasRequested;

class PageController extends Controller
{

    public function index()
    {
    	$title = 'Give As You Earn';
    	$count_signups = DB::table('signups')->get()->count();
    	$count_pots = DB::table('pots')->get()->count();
    	$total = $count_signups + $count_pots;
    	return view('home', compact('total', $total), compact('title', $title));
    }

    public function startPage()
    {
    	$title = 'Get started';
    	return view('signup.get-started', compact('title', $title));
    }

    public function increasePage()
    {
    	$title = 'Increase a previous donation';
    	return view('increase.increase', compact('title', $title));
    }
    
    public function unsurePage()
    {
    	$title = 'List of charities';
    	return view('signup.unsure', compact('title', $title));
    }

    public function enterPage()
    {
    	$title = 'Start a donation';
    	return view('signup.enter', compact('title', $title));
    }

    public function signup(Request $request)
    {
    	//dd($request);
    	$signup = $this->createSignup($request);
    	if ($this->sendDonationConfirmationRequestEmail($signup, 'signup')) {
    		$title = 'Confirmation required';
    		return view('unconfirmed', compact('title', $title));
    	} else {
    		dd("Oops, we couldn't send the email...");
    	}
    }

    public function increase(Request $request)
    {
    	$increase = $this->createSignup($request);
    	if ($this->sendDonationConfirmationRequestEmail($increase, 'increase')) {
    		$title = 'Confirmation required';
    		return view('unconfirmed', compact('title', $title));
    	} else {
    		dd("Oops, we couldn't send the email...");
    	}
    }

    public function pot(Request $request)
    {
    	$pot = $this->createPot($request);
    	if ($this->sendDonationConfirmationRequestEmail($pot, 'pot')) {
    		$title = 'Confirmation required';
    		return view('unconfirmed', compact('title', $title));
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

    public function sendDonationConfirmationRequestEmail($donation, $type)
    {
    	if ($type == 'signup' || $type == 'increase') {
	    	Mail::to($donation->user_email)->send(new DonationWasRequested($donation));
	    	return true;
    	}
    	// otherwise it's a pot
    	Mail::to($donation->user_email)->send(new PotWasRequested($donation));
    	return true;
    }

    public function authoriseSignup($auth_code)
    {
    	$signup = Signup::where('authorisation_code', $auth_code)->get()->first();

    	if ($signup) {
	    	$signup->authorised = true;
	    	$signup->authorisation_timestamp = time();
	    	
	    	if ($signup->save()) {
	    		Mail::to($signup->user_email)->send(new DonationWasConfirmed($signup));
	    		$title = 'Donation confirmed';
	    		return view('finished', compact(['signup', $signup], ['title', $title]));
	    	}
    	} else {
	    	$pot = Pot::where('authorisation_code', $auth_code)->get()->first();
	    	$pot->authorised = true;
	    	$pot->authorisation_timestamp = time();
	    	if ($pot->save()) {
	    		Mail::to($pot->user_email)->send(new PotWasConfirmed($pot));
	    		$title = 'Donation confirmed';
	    		return view('finished', compact(['pot', $pot], ['title', $title]));
	    	}    		
    	}
    }
}
