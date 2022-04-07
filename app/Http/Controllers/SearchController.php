<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;

class SearchController extends Controller
{
    //
    function index(){
        return view('post.search');
    }
    function searchResult(Request $request){
        // return $request;
        $start = Carbon\Carbon::parse($request->start)->startOfDay();
        $end = Carbon\Carbon::parse($request->end)->endOfDay();

        // $start = $request->start ?? date('Y-m-d');
        // $end = $request->end ?? date('Y-m-d');

        // return $end;
        $results = DB::table('posts')
            ->where('title','LIKE','%'.$request->keyword.'%')
            ->whereBetween('created_at',[
                $start,$end
            ])
            ->get();
        return view('post.result',compact('results'));
    }
}
