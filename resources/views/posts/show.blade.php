@extends('layouts.app')


@section('content')
    <h1>{{$post->title}}</h1>
    <img style="width: 30%" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>

    <div>
        {{$post->body}}
    </div>

    <hr>
    <small>创建时间 {{$post->created_at}} by {{$post->user->name}}</small>
    <br>

    <div class="container">
        <div class="row float-left">
            @if(!Auth::guest())
                 @if(Auth::user()->id == $post->user_id)
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary btn-sm ">编辑</a>
                    <hr>
                    <a href="" class="border"></a>
                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'delete')}}
                    {{Form::submit('删除', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                @endif
            @endif
        </div>
    </div>

@endsection
