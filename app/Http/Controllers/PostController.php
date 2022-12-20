<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function all(): Factory|View|Application
    {
        $posts = Post::query()->OrderBy('created_at', 'DESC')->paginate(3);
        return view('posts.all.posts', ['posts' => $posts]);
    }

    public function show($id): Factory|View|Application
    {
        $post = Post::findOrFail($id);

        return view('posts.show.post', ['post' => $post]);
    }

    public function comment($id, CommentRequest $request)
    {
        $post = Post::findOrFail($id);

        $post->comments()->create($request->validated());

        return redirect(route('show.post', $id));
    }

}
