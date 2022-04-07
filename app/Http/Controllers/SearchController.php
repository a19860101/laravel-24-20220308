<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    //
    function index(){
        return view('post.search');
    }
    function searchResult(Request $request){
        $results = DB::table('posts')
            ->where('title','LIKE','%'.$request->keyword.'%')
            ->get();
        return view('post.result',compact('results'));
    }
}
