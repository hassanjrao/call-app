<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserWelcome extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $password;

    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Payment Successful')
            ->view('emails.newUserWelcome')
            ->with([
                'name'=> $this->user->first_name . ' ' . $this->user->last_name,
                'email' => $this->user->email,
                'password' => $this->password
            ]);
    }

}
