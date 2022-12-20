@extends('layout.app')
@section('title', 'Mail form')

@section('content')

    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Свяжитесь с нами</h1>

            <form action="{{ route('contact_form_process') }}" method="post" class="space-y-5 mt-5">
                @csrf

                <input name="email" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Email" />

                @error('email')
                {{ $message }}
                @enderror

                <input name="text" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Сообщение" />

                @error('text')
                {{ $message }}
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Написать</button>
            </form>
        </div>
    </div>

@endsection
