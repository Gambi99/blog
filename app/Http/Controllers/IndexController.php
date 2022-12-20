<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index(): Factory|View|Application
    {
        $posts = Post::query()->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('index', ['posts' => $posts]);
    }

    public function contactForm(): Factory|View|Application
    {
        return view('contact_form');
    }

    public function contactFormProcess(ContactFormRequest $request): Redirector|Application|RedirectResponse
    {
        Mail::to('sme@gmail.com')->send(new ContactForm($request->validated()));

        return redirect(route('contact_form'));
    }
}
