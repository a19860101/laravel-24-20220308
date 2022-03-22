@extends('admin.template.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>商品列表</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>序號</th>
                            <th>商品名稱</th>
                            <th>售價</th>
                            <th>特價</th>
                            <th>上架日期</th>
                            <th>下架日期</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->sale}}</td>
                            <td>{{$product->start_at}}</td>
                            <td>{{$product->end_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
