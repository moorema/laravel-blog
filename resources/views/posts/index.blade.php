@extends('layouts.app')

@section('content')
{{--    <h3>博文</h3>--}}
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 30%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
{{--                        <p>{{$post->body}}</p>--}}
                        <small>创作时间 {{$post->created_at}} by {{$post->user->name}}</small>

                    </div>
                </div>
            </div>
            <hr>
{{--            <a href="/posts/create " class="btn btn-secondary btn-sm">创建</a>--}}

        @endforeach
        {{$posts->links()}}
    @else
        <p>没有文章</p>
    @endif



@endsection
