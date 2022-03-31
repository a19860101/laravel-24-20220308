@extends('template.master')
@section('main-title')
    -- 產品
@endsection
@section('css')
<style>

</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{asset('storage/images/'.$product->cover)}}" class="w-100">
        </div>
        <div class="col-6 position-relative">
            <h3>{{$product->title}}</h3>

            <div class="price position-absolute bottom-0 w-100">
                @if($product->sale != null)
                <span class="text-danger fw-bold">特價NT.${{$product->sale}}</span>
                <br>
                <del class="text-muted"><small>原價NT.${{$product->price}}</small></del>
                @else
                <span class="fw-bold">售價NT.${{$product->price}}</span>
                @endif
                <hr>
                <div>
                    <form action="{{route('cart.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="submit" class="btn btn-warning" value="加入購物車">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 my-5">
            <div class="border border-secondary rounded-3 overflow-hidden">
                <div class="w-100 p-2 bg-primary text-white">
                    商品內容
                </div>
                <div class="p-3">
                    {{$product->description}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
