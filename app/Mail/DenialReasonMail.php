<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DenialReasonMail extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;
    public $reason;

    public function __construct($appointment, $reason)
    {
        $this->appointment = $appointment;
        $this->reason = $reason;
    }

    public function build()
    {
        return $this->subject('Appointment Denied')
                    ->view('emails.appointment-denied')
                    ->with([
                        'appointment' => $this->appointment,
                        'reason' => $this->reason,
                    ]);
    }
}

