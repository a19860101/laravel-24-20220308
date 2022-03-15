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
    function show($id){
        // $post = DB::table('posts')->where('id',$id)->first();
        // 如果用get去取資料，資料會輸出為陣列。
        $post = DB::table('posts')->find($id);

        return view('post.show',compact('post'));
    }
    function destroy($id){
        // return $id;
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('post.index');
    }
    function edit($id){
        $post = DB::table('posts')->find($id);

        return view('post.edit',compact('post'));
    }
    function update(Request $request,$id){
        DB::table('posts')->where('id',$id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'updated_at' => now()
        ]);
        // return redirect()->back();
        return redirect()->route('post.show',['id'=>$id]);
    }
}
