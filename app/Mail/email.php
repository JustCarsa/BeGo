<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class email extends Mailable
{
    use Queueable, SerializesModels;
public $mailMessage;
public  $subject;
public  $name;
public  $email;
    /**
     * Create a new message instance.
     */
    public function __construct($message,$subject,$name,$email)
    {
        //
 
        $this->mailMessage= $message;
        $this->subject= $subject;
        $this->name= $name;
        $this->email= $email;


    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
            
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email',
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