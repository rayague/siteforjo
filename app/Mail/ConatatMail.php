<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $contact;

    public function __construct(array $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->from('ledigitalmaster@gmail.com')
            ->view('emails.contact');
    }
}
