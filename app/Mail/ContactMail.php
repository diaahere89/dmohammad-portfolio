<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public string $full_name,
        public string $email_address,
        public string $phone_number,
        public string $email_subject,
        public string $message_details
    )
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact',
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

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email_address, $this->full_name)
            ->subject($this->email_subject)
            ->replyTo($this->email_address, $this->full_name)
            ->markdown('emails.contact', [
                'full_name'       => $this->full_name,
                'email_address'   => $this->email_address,
                'phone_number'    => $this->phone_number,
                'email_subject'   => $this->email_subject,
                'message_details' => $this->message_details,
            ]);
    }
}
