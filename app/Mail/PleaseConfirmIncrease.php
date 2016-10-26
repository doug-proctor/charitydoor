<?php

namespace App\Mail;

use App\Signup;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PleaseConfirmIncrease extends Mailable
{
    use Queueable, SerializesModels;

    public $increase;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Signup $increase)
    {
        $this->increase = $increase;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Confirmation required')->view('emails.please-confirm-increase');
    }
}
