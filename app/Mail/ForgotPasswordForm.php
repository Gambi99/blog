<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordForm extends Mailable
{
    use Queueable, SerializesModels;

    protected string $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($password)
    {
        $this->password = $password;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Forgot Password Form',
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'email.forgot_password',
            with: ['password' => $this->password]
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
