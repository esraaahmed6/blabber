<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\contact;
use db ;

class ContactMessageController extends Controller
{
     public  function Addfeedback(Request $request){

        if ($request->isMethod('post')){
            $fd= new contact();
            $fd->name=$request->input('name');
            $fd->email=$request->input('email');
            $fd->message= $request->input('message');
            $fd->save();
            
        }
      
    
    	return view('/contact');
    }
}
