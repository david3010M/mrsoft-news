<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $ruc;
    public $razon_social;
    public $direccion;
    public $ciudad_pais;
    public $persona_contacto;
    public $telefono;
    public $correo;
    public $mensaje;
    public $producto;

    /**
     * Create a new message instance.
     */
    public function __construct(
        string  $ruc,
        string  $razon_social,
        ?string $direccion,
        ?string $ciudad_pais,
        string  $persona_contacto,
        string  $telefono,
        string  $correo,
        string  $mensaje,
        string  $producto,
    )
    {
        $this->ruc = $ruc;
        $this->razon_social = $razon_social;
        $this->direccion = $direccion;
        $this->ciudad_pais = $ciudad_pais;
        $this->persona_contacto = $persona_contacto;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->mensaje = $mensaje;
        $this->producto = $producto;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('garzasoftdelivery@gmail.com', 'Garzasoft'),
            subject: 'Contacto desde la web'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'contactEmail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
