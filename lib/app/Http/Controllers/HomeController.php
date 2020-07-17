<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\TestChat;

class HomeController extends Controller
{
    //
    public function getHome(){
        return view('front.index');
    }

    public function getSent(Request $request){

        $message = $request->query->get('message', 'Hey guys!');
        event(new TestChat($message));

        return "Message \" $message \" has been sent.";
    }
}
