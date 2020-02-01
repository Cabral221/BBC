<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class messageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $idMes;
    public $name;
    public $email;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id,$name,$email,$msg)
    {
        $this->idMes = $id;
        $this->name = $name;
        $this->email = $email;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->markdown('emails.messageCreated');
    }
}