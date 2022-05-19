<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Motelroom;
use App\Categories;

class PostsMotelroomController extends Controller
{
    public function postsAll() {
        $posts = Motelroom::orderBy('id', 'DESC')->get();
        foreach ($posts as $post) {
            $post->user;
            $post['selfLike'] = false;

        }
        return response()->json([
            'success' => true,
            'posts' => $posts,
        ]);
    }

    public function postsCreate(Request $request) {

        $post = new Motelroom();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->address = $request->address;
        $post->price = $request->price;
        $post->area = $request->area;
        $post->phone = $request->phone;
        $post->description = $request->description;
        
        // check photo post motelroom
        if($request->images != '') {
            $images = time(). 'jpg';
            file_put_contents('uploads/images/'.$images,base64_decode($request->images));
            $post->images = $images;
        }
        $post->save();
        $post->user;

        return response()->json([
            'success' => true,
            'post' => $post,
            'message' => 'posted'
            
        ]);
    }

    public function postsUpdate() {

    }

    public function postsDelete() {

    }
}
