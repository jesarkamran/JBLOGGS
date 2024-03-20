<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        return view('post_blog')->with(['name' => Auth::user()->name]);
    }

    public function store(Request $request)
    {

        $request['sub_title'] = substr($request->content, 0, 150);
        $request['user_id']   = Auth::id();
        $request['likes']     = 0;
        $request['dis_likes'] = 0;



        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'content' => 'required',
            'image_url' => 'required',
            'likes' => 'required',
            'dis_likes' => 'required',
            'user_id' => 'required',
        ]);

        $imagePath  = $request->file('image_url')->store('public/images');
        $request['image_url'] = $imagePath;



        $post = [
            'title'     => $request->title,
            'sub_title' => $request->sub_title,
            'content'   => $request->content,
            'image_url' => $request->image_url,
            'likes'     => $request->likes,
            'dis_likes' => $request->dis_likes,
            'user_id'   => $request->user_id
        ];

        Post::create($post);

        echo '<script>alert("Post Published Successfully");</script>';
        // Perform other actions, if any
        return redirect('/dashboard')->with(['name' => Auth::user()->name]);
    }


    public function read()
    {
        return view('read');
    }

    public function show($postId)
    {
        $post = post::get($postId);

        return view('read_blog')->with(compact('post'));
    }
    public function allPosts()
    {
        $posts = post::getAllPosts();

        return $posts;
    }
}
