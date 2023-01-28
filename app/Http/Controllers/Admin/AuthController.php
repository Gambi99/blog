<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginProcessRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class AuthController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('admin.auth.login');
    }

    public function loginProcess(LoginProcessRequest $request): Redirector|Application|RedirectResponse
    {
        $data = $request->validated();

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
