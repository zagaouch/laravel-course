@extends('layout')

@section('content')
    <h1>List of posts</h1>
    <ul>
        @foreach ($Posts as $post)
            <li>
                <h2><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
                <p>{{ $post->content }}</p>
                <em>{{ $post->created_at }}</em>
            </li>
        @endforeach
    </ul>
@endsection
