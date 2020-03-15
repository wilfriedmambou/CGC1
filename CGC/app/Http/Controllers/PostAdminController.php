<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;
use Auth;

class PostAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postsAdmin = Posts::orderBy('id')->paginate(8);
        // recuperation des utilisateurs qui sont pas Administrateur 
        $postuser = Posts::orderBy('id')->where('user_id',Auth::id())->paginate(5);
        return view ('layouts.admin.post.index',compact(['postsAdmin','postuser']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)
    {
        $this->authorize('update', $post);
        return view('layouts.admin.post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $post)
    {

          $this->authorize('update', $post);
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required|max:255'
            
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
