<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;

    public $userData;
    public $ordersData;

    /**
     * Create a new message instance.
     */
    public function __construct($userData, $ordersData)
    {
        $this->userData = $userData;
        $this->ordersData = $ordersData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Order Placed')->view('emails.order-placed');
    }
}
