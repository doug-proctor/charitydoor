<?php

namespace App\Mail;

//use App\User;
use App\Signup;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PleaseConfirmSignup extends Mailable
{
    use Queueable, SerializesModels;

//    public $user;
    public $signup;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Signup $signup)
    {
//        $this->user = $user;
        $this->signup = $signup;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Confirmation required')->view('emails.please-confirm-signup');
    }
}
