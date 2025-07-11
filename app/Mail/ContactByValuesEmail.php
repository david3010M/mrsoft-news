<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactByValuesEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $values;
    public $primaryColor;
    public $secondaryColor;
    public $foreground;

    /**
     * Create a new message instance.
     */
    public function __construct(
        array  $values,
        string $primaryColor = '#040931', // Default primary color
        string $secondaryColor = '#5EBEB5', // Default secondary color
        string $foreground = '#FFFFFF' // Default foreground color
    )
    {
        $this->values = $values;
        $this->primaryColor = $primaryColor;
        $this->secondaryColor = $secondaryColor;
        $this->foreground = $foreground;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('garzasoftdelivery@gmail.com', 'Mr. Soft'),
            subject: 'Contacto desde la web',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'contactEmailByValues',
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
