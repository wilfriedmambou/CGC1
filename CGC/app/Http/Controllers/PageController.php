<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // middleware pour la visite des pages profiles 
    // renvoyer vers les pages correspondantes 
    public function accueil(){

        return view('pages.accueil');
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
