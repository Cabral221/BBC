<?php

namespace App\Mail;

use App\Admin;
use App\Models\Niveau;
use App\Models\Filiere;
use App\Models\Program;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserAdmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->request['program_id'] = Program::find($this->request['program_id']);
        $this->request['filiere_id'] = Filiere::find($this->request['filiere_id']);
        return $this->from(Admin::first()->email)->markdown('emails.userAdmisson');
    }
}
