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
            <small>{{$post->created_at}}</small>
            <div class="my-3">
                {{Str::limit($post->content,100)}}
            </div>
            <div>
                <a href="{{route('post.show',['post'=>$post->id])}}" class="btn btn-primary">繼續閱讀</a>
            </div>
            @php
            Carbon\Carbon::setLocale('zh_TW');
            @endphp
            <div class="float-end">
                {{Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection
