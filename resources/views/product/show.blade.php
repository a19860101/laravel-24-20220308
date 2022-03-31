@extends('template.master')
@section('main-title')
    -- 產品
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{asset('storage/images/'.$product->cover)}}" class="w-100">
        </div>
        <div class="col-6">
            <h3>{{$product->title}}</h3>
        </div>
    </div>
</div>
@endsection
