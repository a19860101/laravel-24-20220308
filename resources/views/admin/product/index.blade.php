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
                            <th>狀態</th>
                            <th>動作</th>
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
                            <td>
                                @if($product->end_at < today())
                                    <span class="badge bg-secondary">已下架</span>
                                @else
                                    @if($product->start_at > today())
                                    <span class="badge bg-warning">未上架</span>
                                    @else
                                    <span class="badge bg-primary">上架中</span>
                                    @endif
                                @endif
                            </td>
                            <td>
                                <a href="{{route('product.edit',['product'=>$product->id])}}" class="btn btn-success btn-sm">編輯商品</a>
                                <form action="{{route('product.destroy',['product'=>$product->id])}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger btn-sm" value="刪除" onclick="return confirm('確認刪除？')">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
