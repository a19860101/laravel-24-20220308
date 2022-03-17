@extends('template.master')
@section('main-title')
    -- 建立文章
@endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-8">
                <h2>建立文章</h2>
                <hr>
                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">文章標題</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">文章分類</label>
                        <select name="category_id" id="" class="form-select">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">文章內容</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" value="建立文章">
                </form>
            </div>
        </div>
    </div>

@endsection
