<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    protected $formData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form',
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'email.email_form',
            with: ['formData' => $this->formData]
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
