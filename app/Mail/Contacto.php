<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Persona;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;

    public $persona;
    public $correo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Persona $persona, CorreoElectronico $correo)
    {
        $this->persona = $persona;
        $this->correo = $correo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
