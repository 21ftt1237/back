<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;

    public $userEmail;
    public $orderDetails;

    /**
     * Create a new message instance.
     */
    public function __construct($userEmail, $orderDetails)
    {
        $this->userEmail = $userEmail;
        $this->orderDetails = $orderDetails;
    }

    /**
     * Build the message.
     */
public function build()
{
    return $this->view('emails.order-placed')->with([
        'consolidatedOrder' => $this->consolidatedOrder,
    ])->subject('Order Placed');
}
}
