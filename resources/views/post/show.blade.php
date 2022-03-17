@extends('template.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-7">
                <h2>{{$post->title}}</h2>
                <div>
                    {{$post->content}}
                </div>
                <hr>
                <a href="{{route('post.index')}}" class="btn btn-primary">文章列表</a>
                <a href="{{route('post.edit',['post'=>$post->id])}}" class="btn btn-info">編輯</a>
                <form action="{{route('post.destroy',['post'=>$post->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="刪除" onclick="return confirm('確認刪除？')">
                </form>
            </div>
        </div>
    </div>
@endsection
