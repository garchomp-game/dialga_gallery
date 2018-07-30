@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>新規投稿</h2>
        <hr>
        {{Form::open(['route' => 'gallery.store', 'class' => 'form-group', 'style' => 'margin:0 auto; width:700px;', 'enctype' => 'multipart/form-data'])}}
            <h4 class="col-md-2 pull-left">タイトル</h4>
            <div class="col-md-10 pull-right">
                <input type="text" class="form-control" name="title" value="{{old('title')}}">
            </div>
            <div style="clear:both;"></div>
            <h4 class="col-md-2 pull-left">詳細分</h4>
            <div class="col-md-10 pull-right">
                <textarea name="description" class="form-control">{{old('description')}}</textarea>
            </div>
            <div style="clear:both;"></div>
            <h4 class="col-md-2 pull-left">画像</h4>
            <div class="col-md-10 pull-right">
                <input type="file" name="image" value="{{old('image')}}" style="margin-top:15px;">
            </div>
            <div style="clear:both;"></div>
            <hr>
            <input type="submit" name="submit" value="投稿" class="form-control btn-success" style="margin-top:30px;">
        {{Form::close()}}
    </div>
</div>
@endsection
