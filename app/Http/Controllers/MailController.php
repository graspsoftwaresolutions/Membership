<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function index()
    {
        $data = array('name'=>'Mounika','body'=>'Welcome Home');
        Mail::send('email.mail',$data,function($message){
            $message->to('mounika.Bizsoft@gmail.com','Artisan Web')
                    ->subject('Member Registration is successfull');
            $message->from('mounikakct@gmail.com','Membership');
        });
       echo "Email Sent.Check your Inbox";
    }
}
