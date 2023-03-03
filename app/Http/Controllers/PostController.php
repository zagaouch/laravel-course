<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('posts.index', [
            'Posts' => Post::all()
        ]);
    }
    public function show(Post $post): View
{
    return view('posts.show', [
        'post' => $post
    ]);
}
public function create(){
return view('posts.create');
}
public function store(Request $request){
    $post = new Post();
    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->slug=Str::slug($post->title, '-');
    $post->active=false;
    $post->save();
    return redirect('/posts');

}

}
