@extends('layouts.master')
@section('content')

@include('partials.navbar')
    <div class="container">
        <h1 style="margin-top: 30px;">Create a Post</h1><br>
        <br><br>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                @include('partials.messages')
                {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{ Form::label('title', 'Title of the Post ', ['class' => 'form-label'] )}}
                    {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Give a Title', 'id' => 'title']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('body', 'Body of the Post ', ['class' => 'form-label'] )}}
                    {{ Form::textarea('body', $post->body, ['id' => 'body', 'class' => 'form-control', 'placeholder' => 'Give a Description', 'id' => 'body']) }}
                </div>   
                <br>
                {{ Form::hidden('_method', 'PUT')}}
                {{ Form::submit('Update', ['class' => 'btn btn-success']) }}     
                {!! Form::close() !!}
            </div>
            <div class="col-lg-2"></div>
        </div>
        <br><br><br>
    </div>
@endsection
