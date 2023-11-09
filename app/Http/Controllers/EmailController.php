<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailToGmail;

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
        Mail::to('rekkolosta@gufum.com')->send(new EmailToGmail(
            $request->input('subject'),
            $request->input('from'),
            $request->input('message')
        ));

        // Redirect to a thank you page or back to the form
        return redirect('/thank-you');
    }
}
