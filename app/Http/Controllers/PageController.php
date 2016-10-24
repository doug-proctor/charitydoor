<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Signup;
use App\User;

class PageController extends Controller
{


    public function index() {    	
    	$total = "98"; // @todo get the totaliser from database
    	return view('home', compact('total', $total));
    }

    public function getStarted() {
    	return view('get-started');
    }
    
    public function unsure() {
    	return view('unsure');
    }

    public function enter() {
    	return view('enter');
    }

    public function signup(Request $request) {

    	$isNewUser = empty($request->all()['user_id']);

		if ($isNewUser) {
			$this->createUser($request->all());
		}

    	$this->createSignup($request->all(), $isNewUser);

    	// Send a validation email?

    	return view('unconfirmed');
    }

    public function createUser($request) {
    	$user = new User();
    	$user->first_name = $request['user_firstname'];
    	$user->last_name = $request['user_lastname'];
    	$user->email = $request['user_email'];
    	$user->save();
		return true;
    }

    public function createSignup($request, $isNewUser) {
    	$signup = new Signup();
    	if (!$isNewUser) {
    		$signup->user_id = $request['user_id'];
    	}
    	$signup->amount = $request['amount'];
    	$signup->charity_name = $request['charity_name'];
    	$signup->charity_address = $request['charity_address'];
    	$signup->charity_number = $request['charity_number'];
    	$signup->save();
		return true;
    }
    
}
