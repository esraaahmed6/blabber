<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use  Illuminate\Support\Facades\Input;
use App\Article;
use DB;
use App\User;

class AdminController extends Controller
{
    public function control()
    { 
         $articles = DB::table('articles')->get();
        return view('manage.admin', compact('articles'));
    }
public function showuser()
{
   $users = DB::table('users')->get();
    return view('manage.user', compact('users'));
}
 public  function  blockuser(Request $request ,$id){
       

        $users=User::find($id);
        $article=Article::find($id);
        $article->delete();
        $users->delete();
        return redirect("manage.user" );
    }
  public function  statistics ()
  {
    $users = DB::table('users')->count();
    $articles = DB::table('articles')->count();
    $comments = DB::table('comments')->count();
    $most_comments = user::withCount('comments')->OrderBy('comments_count','desc')->first();
    dd($most_comments->comments_count);
    return view('manage.statistics', compact('users', 'articles', 'comments'));
  }

}
