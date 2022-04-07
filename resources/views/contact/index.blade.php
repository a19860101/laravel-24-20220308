@extends('template.master')
@section('main-title')
    -- 聯絡我
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{route('contact.result')}}" method="get">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">姓名</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">電話</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">MAIL</label>
                    <input type="text" name="mail" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">內容</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="送出" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
