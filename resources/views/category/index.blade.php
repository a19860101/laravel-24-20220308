@extends('template.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>分類管理</h2>
                <hr>
            </div>
            <div class="col-lg-8 mb-3">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">分類標題</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">分類英文標題</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <input type="submit" value="建立分類" class="btn btn-primary">
                </form>
            </div>
            <div class="col-lg-4">
                <ul class="list-group">
                    @foreach($categories as $category)
                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        {{$category->title}}
                        <form action="{{route('category.destroy',['category'=>$category->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="刪除" onclick="return confirm('確認刪除？')">
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
