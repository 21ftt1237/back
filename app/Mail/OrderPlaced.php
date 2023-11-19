<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    public $userEmail;
    public $orderDetails;

    public function __construct($userEmail, $orderDetails)
    {
        $this->userEmail = $userEmail;
        $this->orderDetails = $orderDetails;
    }

    public function build()
    {
        return $this->view('emails.order-placed')
            ->subject('Order Placed - Invoice');
    }
}
