@extends('template.master')
@section('main-title')
    -- 搜尋結果
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>
                共有{{count($results)}}筆結果
            </h2>
            <hr>
        </div>
        @foreach ($results as $result)
        <div class="col-8">
            <h3>
                <a href="{{route('post.show',['post'=>$result->id])}}">
                    {{$result->title}}
                </a>
            </h3>
        </div>
        @endforeach
    </div>
</div>
@endsection
