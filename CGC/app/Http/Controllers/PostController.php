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
        $posts = Posts::orderBy('id', 'desc')->paginate(3);
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
    public function edit(Posts $posts)
    {
        $post = Posts::findOrFail($posts);
        // show the view and pass the record to the view
        return view('post.show',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
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
