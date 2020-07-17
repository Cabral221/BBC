<?php

namespace App\Mail;

use App\Models\Niveau;
use App\Models\Filiere;
use App\Models\Program;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    public $idRequest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request,$id)
    {
        $this->request = $request;
        $this->idRequest = $id;
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
        return $this->from($this->request['email'])->markdown('emails.admissionNotification');
    }
}
