@extends('template.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 border rounded my-3 p-3">
                <h2>{{$post->title}}</h2>
                <div class="my-3 lh-lg">
                    {!! $post->content !!}
                </div>
                <div class="my-3">
                    {{$post->updated_at}}
                </div>
                 <a href="{{route('post.index')}}" class="btn btn-primary">文章列表</a>
                <a href="{{route('post.edit',['post'=>$post->id])}}" class="btn btn-info">編輯</a>
                <form action="{{route('post.destroy',['post'=>$post->id])}}" method="post" class="d-inline-block">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" value="刪除" onclick="return confirm('確認刪除？')">
                </form>

            </div>
        </div>
    </div>
@endsection
