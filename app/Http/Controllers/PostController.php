<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index(){
        // return view('post.index')->with([
        //     'post' => $post,
        //     'id' => $id
        // ]);
        // return view('post.index',[
        //     'post'=>$post,
        //     'id'=>$id
        // ]);
        // return view('post.index',compact('post','id'));

        return view('post.index');
    }
    function create(){
        return view('post.create');
    }
    function store(Request $request){
        return $request;
        // return $request->content;
    }
}
