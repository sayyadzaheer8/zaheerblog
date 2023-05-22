<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postController extends Controller
{
   public function loop(Request $request) {

       $post = post::all();
         return view('/post',['posts' => $post]);
   }
    public function show(Request $request)
    { $post = post::find($request->id);
        return view('post.show',['posts' => $post]);
    }

    }
