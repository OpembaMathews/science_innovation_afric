<?php

namespace App\Http\Controllers\project;

use App\Http\Controllers\Controller;
use App\Mail\AdminEmail;
use App\Mail\UserResponseEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProjectsController extends Controller
{
    //

    public function codingEducation()
    {


        return view('codingedu');
    }

    public function donate()
    {

        return view('donate');
    }

    public function donations()
    {

        return view('donations');
    }

    public function digitalExchange()
    {

        return view('digital_exchange');
    }

    public function contactUs()
    {


        return view('contact_us');
    }

    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        if($this->isOnline()){
            $mail_data = [
                'recepient'=>"opemba.m@gmail.com",
                'fromEmail'=>$request->email,
                'fromName'=>$request->name,
                'subject'=>$request->subject,
                'body'=>$request->body,

            ];
            Mail::send('emails.email-template',$mail_data, function($message)use ($mail_data){
                $message->to($mail_data['recepient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });
            return back()->with('success', 'Your message has been sent successfully.');

        }else{
            return back()->with('error', 'Check your internet connection .');
        }

        // // Send an email to the admin
        // Mail::to('opemba.m@taiwanafricaservice.org')->send(new  AdminEmail($validatedData));

        // // Send a response email to the user
        // Mail::to($validatedData['email'])->send(new  UserResponseEmail($validatedData));

        // // Redirect back with a success message
        // return back()->with('success', 'Your message has been sent successfully.');
    }

    public function isOnline( $site="https://youtube.com."){
        if(@fopen($site,"r")){
            return true;

        }else{
            return false;
        }

    }
}
