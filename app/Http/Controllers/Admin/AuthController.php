<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class AuthController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('admin.auth.login');
    }

    public function loginProcess(Request $request): Redirector|Application|RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'string'],
            'password' => ['required']
        ]);

        if (auth('admin')->attempt($data)) {
            return redirect(route('admin.posts.index'));
        }

        return redirect(route('admin.login'))->withErrors(['email' => 'Error']);
    }

    public function logout(): Redirector|Application|RedirectResponse
    {
        auth('admin')->logout();

        return redirect(route('admin.login'));
    }
}
