@extends('template.master')
@section('main-title')
    -- 購物車
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>購物車列表</h2>
            <div>
                {{count($carts) == 0 ? '目前沒有商品':'目前共有'.count($carts).'件商品'}}
            </div>
            {{-- @if(count($carts) == 0)
            <div>目前沒有商品</div>
            @endif
            @if(count($carts) != 0)
            <div>目前共有{{count($carts)}}件商品</div>
            @endif --}}

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
        <div class="col-12">
            <div class='text-end'>
                總金額:NT.${{$total}}
            </div>
            @if(count($carts) != 0)
            <form action="{{route('clearCart')}}" method="post">
                @csrf
                <input type="submit" value="清空購物車" class="btn btn-outline-danger">
            </form>
            @endif
            <div class="my-2">
                <a href="{{route('product.list')}}" class="btn btn-primary">繼續購物</a>
            </div>
        </div>
    </div>
</div>
@endsection
