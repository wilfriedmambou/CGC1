<?php

namespace App\Http\Controllers;
use App\Posts;
use App\User;
use Auth;
use App\Comments;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = Posts::orderBy('id', 'desc')->where('publier','on');
        $user = User::all();
        // post pub et non pub 
        $postsall = Posts::all();
        // post en ligne
        $postPersoPublier = Posts::orderBy('id','desc')->where('user_id',Auth::id())->where('publier','on');
        // post de l'utilisateur qui est encore en brouillon il ne la pas encore publier en ligne 
        $postPersoNonPublier = Posts::orderBy('id','desc')->where('user_id',Auth::id())->where('publier',NULL);

        $Mycomments = Comments::all()->where('user_id',Auth::id());


        return view ('home',compact(['post','user','postPersoNonPublier','postPersoPublier','Mycomments','postsall']));
        // return view('home');
    }
}
