<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailToGmail extends Mailable
{
    use Queueable, SerializesModels;

    public $request; // Add this property to store the request data

    /**
     * Create a new message instance.
     *
     * @param array $request
     */
    public function __construct($request)
    {
        $this->request = $request; // Assign the request data to the property
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('your@gmail.com') // Set the sender's email
            ->subject('New Customer Email')
            ->view('emails.customer-email')
            ->with(['request' => $this->request]); // Pass the request data to the email view
    }
}

