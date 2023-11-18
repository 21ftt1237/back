<?php

namespace App\Mail;

// OrderStatusUpdated.php

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderStatusUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public $orderId;

    /**
     * Create a new message instance.
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
        $this->subject('Order Status Updated');
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content($this->view('emails.order-status-updated', ['orderId' => $this->orderId]));
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

