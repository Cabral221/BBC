<?php

namespace App\Mail;

use App\Admin;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$msg)
    {
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
        return $this->from(Admin::first()->email,'BBC University')
                    ->subject('BBC acknowledgment of receipt')
                    ->markdown('emails.notifmessagesforuser');
    }
}
