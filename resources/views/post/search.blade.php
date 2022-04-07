@extends('template.master')
@section('main-title')
    -- 搜尋文章
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            <form action="{{route('search.result')}}" method="get">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">關鍵字</label>
                    <input type="text" class="form-control" name="keyword">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">日期</label>
                    <br>
                    自<input type="date" name="start" class="form-control">
                    至<input type="date" name="end" class="form-control">
                </div>
                <div>
                    <input type="submit" value="搜尋" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
