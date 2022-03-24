@extends('template.master')
@section('main-title')
    -- 產品列表
@endsection
@section('content')
<div class="container">
    <div class="row g-4">
        <div class="col-12">
            <h2>商品列表</h2>
        </div>
        @foreach($products as $product)
        <div class="col-xl-3 col-sm-6">
            <div class="border rounded h-100 overflow-hidden shadow-sm mx-5 mx-sm-0">
                @if($product->cover != null)
                <img src="{{asset('storage/images/'.$product->cover)}}" class="w-100">
                @else
                <div class="placeholder col-12 py-5">
                </div>
                @endif
                <div class="p-3">
                    <h4>{{$product->title}}</h4>
                    @if($product->sale != null)
                    <span class="text-danger fw-bold">特價NT.${{$product->sale}}</span>
                    <br>
                    <del class="text-muted"><small>原價NT.${{$product->price}}</small></del>
                    @else
                    <span class="fw-bold">售價NT.${{$product->price}}</span>

                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
