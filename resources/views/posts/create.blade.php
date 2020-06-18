@extends('layouts.app')

@section('content')
    <h1>写文章</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', '标题')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('body', '内容')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>

        {{Form::submit('提交', ['class' => 'btn btn-secondary btn-sm'])}}
    <a href="/posts" class="btn btn-secondary btn-sm   ">返回</a>
    {!! Form::close() !!}



@endsection
