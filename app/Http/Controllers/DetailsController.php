<?php

namespace App\Http\Controllers;

use App\Post;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsController extends Controller
{
    public function show($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        // dd($post);
        return view('details', compact('post'));
    }
    public function add()
    {
        return view('addpost');
    }
    public function addtodb(Request $request)
    {
        // dd($request);
        $validatedData = $this->validate($request, [
            'title' => 'required|unique:posts,title',
            'brief' => 'required',
            'body' => 'required',
            'section' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);


        if ($request->Content == 'I') {

            if ($request->hasFile('image')) {
                // Get filename with the extension
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                // Upload Image
                $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

                // make thumbnails
                $thumbStore = 'thumb.' . $filename . '_' . time() . '.' . $extension;
                $thumb = Image::make($request->file('image')->getRealPath());
                $thumb->resize(80, 80);
                $thumb->save('storage/images/' . $thumbStore);
            } else {
                $fileNameToStore = 'noimage.png';
            }
        } else {
            //this is video content
        }

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->brief = $request->input('brief');
        $post->body = $request->input('body');
        if ($request->section == 'section1') {
            $post->section = 'section1';
        } else {
            $post->section = 'section2';
        }
        $post->user_id = auth()->user()->id;
        if ($request->Content == 'I') {
            $post->image = 'images/' . $fileNameToStore;
            $post->is_video = '0';
        } else {
            $post->video = $request->input('video');
            $post->is_video = '1';
        }
        $post->save();

        return redirect(route('dashboard'))->with('message', 'Post Created');
    }
}
