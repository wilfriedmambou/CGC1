<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use App\User;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::findOrfaild(Auth::id());
        $posts = Posts::orderBy('id', 'desc')->where('publier','on')->paginate(6);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255'
          ]);
          // process the data and submit it
          $post = new Posts();
          $post->title = $request->title;
          $post->content = $request->content;
          $post->publier = $request->publier;
          $post->user_id = Auth::id();

    
          // if successful we want to redirect
          if ($post->save()) {
            return redirect()->route('posts.show', $post->id);
          } else {
            return redirect()->route('posts.create');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::findOrFail($id);

        // return $post;
        // show the view and pass the record to the view
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)
    {
        $this->authorize('update', $post);

        // $post = Posts::findOrFail($id);
        // show the view and pass the record to the view
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
        //  les policy sont sensible au nomage des variables un 's' sur
        //  le $post conduit a une erreur qui empeche le bon fonctionnement

    public function update(Request $request, Posts $post)
    {
        $this->authorize('update', $post);
        $this->validate($request, [
            'title' => 'required|max:255',
            
          ]);
          $post->update([
            $post->title = $request->title,
            $post->content = $request->content,
            $post->publier = $request->publier,
            $post->user_id = Auth::id()
          ]);
        
         if( $post->save()){
            return "Utilisateur modifier avec success";
         }
         return 'Echec';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
  

}
