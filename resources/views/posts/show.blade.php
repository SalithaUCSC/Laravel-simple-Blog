@extends('layouts.master')

@section('content')

@include('partials.navbar')
    <div class="container">
        <a href="/posts" class="btn btn-secondary" style="margin-top: 30px;">Go Back</a>
        <h1 style="margin-top: 30px;">{{$post->title}}</h1><br>
        <div class="row">
            <div class="col-lg-12">
                <p style="font-size:20px;">{!!$post->body!!}</p>
                <p style="font-size:14px;">Written on {{$post->created_at}}</p>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-warning float-left">Edit</a>
                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger float-right'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection