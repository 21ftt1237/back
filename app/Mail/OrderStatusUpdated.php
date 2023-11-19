<?php

namespace App\Mail;

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
    public function build()
    {
        return $this->view('emails.order-status-updated')->with(['orderId' => $this->orderId]);
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
