@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @auth
                <a href="{{route('gallery.create')}}" class="btn btn-success" style="margin-bottom:15px;">新規投稿する</a>
            @endauth
            <div class="panel panel-default">
                <div class="panel-heading">ダッシュボード</div>
                <div class="panel-body">
                    @forelse ($gallery as $key => $value)
                        @isset ($value->path)
                            <img style="width:100%; height:70%;" src="{{url('storage/'.$value->path)}}">
                        @endisset
                        <h2>{{$value->title}}</h2>
                        <p>{{$value->description}}</p>
                        <hr style="border:1px solid black">
                    @empty
                        <h2>まだ何も投稿されていません</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
