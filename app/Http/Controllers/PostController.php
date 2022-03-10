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

        // $posts = DB::select('SELECT * FROM posts');
        $posts = DB::table('posts')->get();

        return view('post.index',compact('posts'));
        // return view('post.index',['posts'=>$posts]);
        // return view('post.index')->with(['posts'=>$posts]);
    }
    function create(){
        return view('post.create');
    }
    function store(Request $request){
        // DB::insert('INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,?,?)',[
        //     $request->title,
        //     $request->content,
        //     now(),
        //     now()
        // ]);
        DB::table('posts')->insert([
            'title'         => $request->title,
            'content'       => $request->content,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
        return redirect()->route('post.index');
    }
    function show($post){
        return $post;
    }
}
