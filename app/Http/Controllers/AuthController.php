<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginProcessRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\ForgotPasswordForm;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function loginForm(): Factory|View|Application
    {
        return view('auth.login');
    }

    public function loginProcess(LoginProcessRequest $request): Redirector|Application|RedirectResponse
    {
        $data = $request->validated();

        if (auth('web')->attempt($data)) {
            return redirect(route('home'));
        }
        return redirect(route('login'))->withErrors(['email' => 'Error']);
    }

    public function registerForm(): Factory|View|Application
    {
        return view('auth.register');
    }

    public function registerProcess(RegisterRequest $request): Redirector|Application|RedirectResponse
    {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if ($user) {
            auth('web')->login($user);
        }

        return redirect(route('home'));
    }

    public function forgotPassword(): Factory|View|Application
    {
        return view('auth.forgot_password');
    }

    public function forgotPasswordProcess(ForgotPasswordRequest $request): Redirector|Application|RedirectResponse
    {
        $data = $request->validated();

        $user = User::where(['email' => $data['email']])->first();

        $password = uniqid();
        $user->password = bcrypt($password);
        $user->save();
        Mail::to($user)->send(new ForgotPasswordForm($password));

        return redirect(route('home'));
    }

    public function logout(): Redirector|Application|RedirectResponse
    {
        auth('web')->logout();

        return redirect(route('home'));
    }
}
