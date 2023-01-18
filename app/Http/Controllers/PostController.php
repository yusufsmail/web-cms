<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index(){
        return view('post', [
            'title' => 'post',
            'post' => Post::all()
        ]);
    }

    public function selengkapnya($category, $post){
        // die('test'.$category. 'post'.$post);
        $detailpost = Post::where('slug', $post)
                ->first();
                return view('content', [
                    'post' => $detailpost
                ]);
    }


    // public function show(Post $post)
    // {
    //     return view('/post', [
    //         'post' => $post
    //     ]);
    // }
}
