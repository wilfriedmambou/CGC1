<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\User;
use App\Comments;
use Auth;


class PageController extends Controller
{
    // middleware pour la visite des pages profiles 
    // renvoyer vers les pages correspondantes 
    public function accueil(){
        // recuperation de tous les post 
        $posts = Posts::all();
        // on recupere les commentaires aussi 

        return view('pages.accueil',compact('posts'));
    }
    public function profile (){
        $posts = Posts::orderBy('id', 'desc')->where('user_id',Auth::id())->paginate(30);
       

        
        return view('pages.profile',compact('posts'));
       
        
    }
    public function apropos(){
        return view('pages.apropos');

    }
    public function travaux (){
        return view('pages.travaux');

    }
    public function contact (){
        return view('pages.contact');
    }
    public function produit (){
        return view('pages.produits');
    }
    public function allDatas (){
    	$users = User::all();
        return view('layouts.admin.dashTable',compact('users'));
    }
   
}
