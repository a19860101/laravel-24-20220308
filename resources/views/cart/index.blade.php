@extends('template.master')
@section('main-title')
    -- 購物車
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>購物車列表</h2>
        </div>
        @foreach($carts as $cart)
        <div class="col-12">
            <h2>{{$cart->product_id}}</h2>
        </div>
        @endforeach
    </div>
</div>
@endsection
