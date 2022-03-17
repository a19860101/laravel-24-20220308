@extends('template.master')
@section('main-title')
    -- 文章列表
@endsection
@section('content')

<h1>文章列表</h1>
<a href="/post/create">建立文章</a>
<a href="{{route('post.create')}}">建立文章</a>
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-7">
            <h2>{{$post->title}}</h2>
            <div>
                {{$post->content}}
            </div>
            <div>
                <a href="{{route('post.show',['post'=>$post->id])}}" class="btn btn-primary">繼續閱讀</a>
            </div>
            <hr>
        </div>
        @endforeach
    </div>
</div>
@endsection
