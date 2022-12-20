@extends('layout.app')
@section('title', 'Register')

@section('content')

    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Регистрация</h1>

            <form action="{{ route('register_process') }}" method="post" class="space-y-5 mt-5">
                @csrf

                <input name="name" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Имя" />

                @error('name')
                {{ $message }}
                @enderror

                <input name="email" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Email" />

                @error('email')
                {{ $message }}
                @enderror

                <input name="password" type="password" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Пароль" />

                @error('password')
                {{ $message }}
                @enderror

                <input name="password_confirmation" type="password" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Подтверждение пароля" />

                @error('password_confirmation')
                {{ $message }}
                @enderror

                <div>
                    <a href="{{ route('login') }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Есть аккаунт?</a>
                </div>

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Зарегистрироваться</button>
            </form>
        </div>
    </div>

@endsection
