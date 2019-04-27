<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Input;

use App\Http\Requests;

use App\Article;

use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Array_;
use App\contact;
use DB ;

class guestController extends Controller
{
    //


      public  function  viewG()
      {

       $articles= Article::all();
       $ar=Array('articles'=>$articles);
       return view('welcome',$ar);
      }


        public  function  readG(Request $request ,$id){

        $article=Article::find($id);
        $ar=Array('article'=>$article);
        return view("guestRead",$ar);
    }
     
/*
*/
    }
