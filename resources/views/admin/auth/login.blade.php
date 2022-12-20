@extends('layout.app')
@section('title', 'Login')

@section('content')

    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Вход</h1>

            <form action="{{ route('admin.login_process') }}" method="post" class="space-y-5 mt-5">
                @csrf

                <input name="name" type="text" class="w-full h-12 border border-red-500 rounded px-3" placeholder="Имя" />

                @error('name')
                {{ $message }}
                @enderror

                <input name="email" type="text" class="w-full h-12 border border-red-500 rounded px-3" placeholder="Email" />

                @error('email')
                {{ $message }}
                @enderror

                <input name="password" type="password" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Пароль" />

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Войти</button>
            </form>
        </div>
    </div>

@endsection
