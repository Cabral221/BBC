<?php

namespace App\Mail;

use App\Admin;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class messageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $idMes;
    public $name;
    public $email;
    public $msg;

    public $allAdmin = [];

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

        $this->allAdmin = Admin::all();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
                    ->cc($this->allAdmin)
                    ->subject('New message from BBC')
                    ->markdown('emails.messageCreated');
    }
}
