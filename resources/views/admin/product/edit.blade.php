@extends('admin.template.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>編輯商品</h2>
            <form action="{{route('product.update',['product'=>$product->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="" class="form-label">商品名稱</label>
                    <input type="text" name="title" class="form-control" value="{{$product->title}}">
                </div>
                <div class="mb-3">
                    @if($product->cover)
                        <img src="{{asset('storage/images/'.$product->cover)}}" width="200">
                        <input type="hidden" name="cover">
                        <form action="" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-sm" value="刪除圖片">
                        </form>
                    @else
                        <label for="" class="form-label">商品圖片</label>
                        <input type="file" name="cover" class="form-control">
                    @endif
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">商品敘述</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">售價</label>
                    <input type="text" name="price" class="form-control" value="{{$product->price}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">特價</label>
                    <input type="text" name="sale" class="form-control" value="{{$product->sale}}">
                </div>
                <div class="mb-3">
                    @php
                        $start_at = Carbon\Carbon::parse($product->start_at)->toDateString();
                    @endphp
                    <label for="" class="form-label">上架日期</label>
                    <input type="date" name="start_at" class="form-control" value="{{$start_at}}">
                </div>
                <div class="mb-3">
                    @php
                        $end_at = Carbon\Carbon::parse($product->end_at)->toDateString();
                    @endphp
                    <label for="" class="form-label">下架日期</label>
                    <input type="date" name="end_at" class="form-control" value="{{$end_at}}">
                </div>
                <input type="submit" class="btn btn-primary" value="儲存修改">
            </form>
        </div>
    </div>
</div>
@endsection
