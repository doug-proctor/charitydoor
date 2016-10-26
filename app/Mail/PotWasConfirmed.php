<?php

namespace App\Mail;

use App\Pot;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PotWasConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    public $pot;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Pot $pot)
    {
        $this->pot = $pot;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pot confirmed')->view('emails.pot-was-confirmed');
    }
}
