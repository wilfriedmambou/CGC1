<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Storage;
use File;

class ImageUploadController extends Controller
{
    public function imageUpload(){
        return view ('image/upload');
    }
    public function imageUploadPost(Request $request){
        $user=Auth::user();
        $file=$request->file('image');
        $filename=uniqid($user->id."_").".".$file->getClientOriginalExtension();
    
        Storage::disk('public')->put($filename,File::get($file));

        $user->profile_pic = $filename;
        $user->save();
        return view('image.upload')->with('success','bon');
    }
}
