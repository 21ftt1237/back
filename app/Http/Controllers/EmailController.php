<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        return view('Help.BruzoneEmail');
    }

    public function sendEmail(Request $request)
    {
        // Validate the form input
        $request->validate([
            'from' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::to('bruzonestore@gmail.com')->send(new EmailToGmail(
            $request->input('subject'),
            $request->input('from'),
            $request->input('message')
        ));

        // Redirect to a thank you page or back to the form
        return redirect('/thank-you');
    }
}
