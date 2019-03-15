<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
       $articles= Article::where('user_id','=',$id)->get();
        $ar=Array('articles'=>$articles);
       
    
        return view('home',$ar);
    }
    
       
      public  function  delete(Request $request ,$id){
       

        $article=Article::find($id);
        $article->delete();
        $comm= comment::all('article_id',$id);
      if( hasValue($comm)){
          $comm->delete();
          return redirect("view" );
      }
        
        return redirect("view" );
    }
    
    public  function  edit(Request $request ,$id){
        
$ar= Article::find($id);
        if ($request->isMethod('post')){
            
            $ar->title=$request->input('title');
            $ar->body=$request->input('body');
            $ar->user_id=Auth::user()->id;
            $ar->save();
            return redirect('view');
        }
        else{
        $arr=array('Article'=>$ar);
        return view('manage.edit',$arr);}
    }

}
