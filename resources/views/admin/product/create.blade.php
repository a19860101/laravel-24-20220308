@extends('admin.template.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>新增商品</h2>
                <form action="{{route('product.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">商品名稱</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">商品圖片</label>
                        <input type="file" name="caver" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">商品敘述</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">售價</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">特價</label>
                        <input type="text" name="sale" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">上架日期</label>
                        <input type="date" name="start_at" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">下架日期</label>
                        <input type="date" name="end_at" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" value="新增商品">
                </form>
            </div>
        </div>
    </div>
@endsection
