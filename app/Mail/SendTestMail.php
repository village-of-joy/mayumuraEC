<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendTestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($goods)
    {
        $this->goods = $goods;
        
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
   
    public function build()
    {
        
        return $this->view('emails.test')
                ->to('y200130@mail.ryukoku.ac.jp')
                ->from('test@gmail.com')
                ->subject('購入完了商品')
                ->with(['goods' => $this->goods]);
    }
}
