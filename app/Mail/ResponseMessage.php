<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResponseMessage extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $sms;
    public $nameToSend;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nameToSend, $email,$sms)
    {
        
        $this->email = $email;
        $this->sms = $sms;
        $this->nameToSend = $nameToSend;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->from($this->email)
            ->markdown('emails.responseMessage');
    }
}
