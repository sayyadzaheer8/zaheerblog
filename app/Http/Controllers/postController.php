<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postController extends Controller
{
   public function show(Request $request) {

       $post = post::all();
         return view('post',['post' => $post]);
   }
    public function post(Request $request)
    { $post = post::find($request->id);
        return view('post',['post' => $post]);
    }

    }
