<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    function index(){
        return view('post.search');
    }
    function searchResult(Request $request){
        return $request;
    }
}
