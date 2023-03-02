@extends('layout')
@section('content')
<form method="" action="">
    <div>
        <label for="title">Your title</label>
        <input id="title" name="title" type="text">
    </div>
    <div>
        <label for="content">Your content</label>
        <input type="text" id="content" name="content">
    </div>
    <button type="submit">Add your post</button>

</form>
@endsection