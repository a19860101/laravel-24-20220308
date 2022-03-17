@extends('template.master')
@section('main-title')
    -- 文章列表
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-10 border rounded my-3 p-3">
            <h2>{{$post->title}}</h2>
            <div class="my-3">
                {{$post->content}}
            </div>
            <div>
                <a href="{{route('post.show',['post'=>$post->id])}}" class="btn btn-primary">繼續閱讀</a>
            </div>
            <div class="float-end">
                {{$post->updated_at}}
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection
