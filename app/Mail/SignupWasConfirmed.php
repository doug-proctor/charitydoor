<?php

namespace App\Mail;

use App\User;
use App\Signup;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SignupWasConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $signup;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Signup $signup)
    {
        $this->user = $user;
        $this->signup = $signup;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Signup confirmed')->view('emails.signup-was-confirmed');
    }
}
