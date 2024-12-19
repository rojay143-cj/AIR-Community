<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailer;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $validate = $request->validate([
            'name' => 'string|required',
            'organization' => 'string',
            'number' => 'string',
            'inquiry' => 'string',
            'email' => 'string',
            'message' => 'string',
        ]);
        $name = $validate['name'];
        $organization = $validate['organization'];
        $email = $validate['email'];
        $number = $validate['number'];
        $toEmail = "support@airtech.sg";
        $message = $validate['message'];
        $subject = $validate['inquiry'];
        $email = Mail::to($toEmail)->send(new Mailer($message, $subject, $name, $organization, $email , $number));
        if($email){
            return redirect()->route('contact')->with('success', 'Email sent successfully');
        }else{
            return redirect()->route('contact')->with('error', 'Email not sent');
        }
    }
}
