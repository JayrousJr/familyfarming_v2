<?php

namespace App\Http\Controllers;

use App\Mail\MessageMail;
use App\Mail\MessageReceived;
use App\Mail\MessageSent;
use App\Mail\USerFeedbackEmail;
use App\Models\Contact;
use App\Models\Message;
use App\Notifications\NewMessageNotification;
use Illuminate\Http\Request;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function message(Request $request)
    {
        //define the validation rules 
        $rules = [
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:1000', 'min:20'],
        ];

        //create a validator instance 
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route("contact")->withErrors($validator)->withInput();
        }

        //creating the object message of the class Model Message
        $message = new Contact();
        //sending the data to the database 
        $message->firstname = request()->firstname;
        $message->lastname = request()->lastname;
        $message->subject = request()->subject;
        $message->email = request()->email;
        $message->message = request()->message;

        $message->save();
        $emailto = 'info@familyfarmingltd.com';
        //object with the message row

        Mail::to($emailto)->send(new MessageSent($message));

        session()->flash('message', 'Congratulation Message sent successiful!');
        return redirect()->route("home");
    }
}