<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function SendMail(Request $req){
        $message = array('message' => 'You mail have been sent. please if you dont recieve confirmation within 24Hrs, then try to write to us by Whatsapp, we are there 100%');
        return redirect()->back()->with($message);
    }
}
