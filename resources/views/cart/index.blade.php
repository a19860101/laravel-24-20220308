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
            <div class="border rounded my-3 p-3 d-flex justify-content-between align-items-center">
                <img src="{{asset('storage/images/'.$cart->product->cover)}}" width="200">
                <div class="me-auto ms-2">
                    {{$cart->product->title}}
                </div>
                <div class="mx-2">
                    NT.${{$cart->product->price}}
                </div>
                <form action="{{route('cart.destroy',['cart'=>$cart->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="移除購物車" class="btn btn-danger btn-sm">
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
