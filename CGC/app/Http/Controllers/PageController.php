<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\User;
use App\Comments;


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
        return view('pages.profile');

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
   
}
