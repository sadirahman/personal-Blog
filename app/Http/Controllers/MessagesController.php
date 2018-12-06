<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Massage;

class MessagesController extends Controller
{
     public function submit(Request $request){
    	$this->validate($request,[
          'name'=>'required',
          'email'=>'required'

    	]);

    	//Create ne message
    	$message = new Massage;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');

    	//save massage
    	$message->save();

    	//redirect
    	return redirect('/home')->with('success','Message Sent');
    }

      public function getMessages(){
        $messages=Massage::all();
        return view('messages')->with('messages',$messages);
    }
  
    
 }
