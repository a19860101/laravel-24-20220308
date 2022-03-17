@extends('template.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2>編輯文章</h2>
                <hr>
                <form action="{{route('post.update',['post'=>$post->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label">文章標題</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="">文章分類</label>
                        <select name="category_id" id="" class="form-select">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected' : '' }}>{{$category->title}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">文章內容</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" value="儲存">
                </form>
            </div>
        </div>
    </div>

@endsection
