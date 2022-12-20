<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateFormRequest;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class PostController extends Controller
{

    public function index(): Factory|View|Application
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return view('admin.posts.index', ['posts' => $posts]);
    }


    public function create(): Application|Factory|View
    {
        return view('admin.posts.create');
    }


    public function store(CreateFormRequest $request): Application|RedirectResponse|Redirector
    {
        Post::create($request->validated());
        return redirect(route('admin.posts.index'));
    }


    public function edit(int $id): Application|Factory|View
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.create', ['post' => $post]);
    }


    public function update(CreateFormRequest $request, int $id): Application|RedirectResponse|Redirector
    {
        $post = Post::findOrFail($id);
        $post->update($request->validated());

        return redirect(route('admin.posts.index'));
    }

    public function destroy(int $id): Application|RedirectResponse|Redirector
    {
        Post::destroy($id);
        return redirect(route('admin.posts.index'));
    }
}
