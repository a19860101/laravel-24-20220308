<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        DB::insert('INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)',[
            $request->title,
            $request->content,
            now(),
            now()
        ]);
        return redirect()->route('post.index');
    }
}
