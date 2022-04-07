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
        $start = $request->start ?? date('Y-m-d');
        $end = $request->end ?? date('Y-m-d');


        $results = DB::table('posts')
            ->where('title','LIKE','%'.$request->keyword.'%')
            ->whereBetween('created_at',[
                $start,$end
            ])
            ->get();
        return view('post.result',compact('results'));
    }
}
