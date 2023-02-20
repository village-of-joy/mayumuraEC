<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacts)
    {
        $this->contacts = $contacts;
        
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
   
    public function build()
    {
        
        return $this->view('emails.contact')
                ->to('kitaken.09151007@docomo.ne.jp')
                ->from('toshipapa0915.akimama1007@gmail.com')
                ->subject('まゆ村｜Contact Mail')
                ->with(['contacts' => $this->contacts]);
    }
}
