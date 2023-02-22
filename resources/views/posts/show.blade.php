@extends('layout')

@section('content')
    <h1> {{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <em>{{$post->created_at}}</em>
    <span>{{$post->active}}</span>
        
@endsection
