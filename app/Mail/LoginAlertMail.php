<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class LoginAlertMail extends Mailable
{
    public function build()
    {
        return $this->subject('Login Alert')
                    ->view('emails.login');
    }
}