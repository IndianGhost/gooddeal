<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function readPost($id){

        return view('Blog.post', ['id' => $id]);
    }
}
