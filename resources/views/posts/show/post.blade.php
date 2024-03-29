@extends('layout.app')
@section('title', "Блог: $post->title")

@section('content')
    <x-guest.header></x-guest.header>

    <div>
        <div class="m-auto px-4 py-8 max-w-xl">
            <div class="bg-white shadow-2xl" >
                <div>
                    <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
                </div>
                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="font-bold text-2xl text-gray-800">{{ $post->title }}</h2>
                    <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                        {{ $post->description }}
                    </p>
                </div>
            </div>


            <div>
                <section class="rounded-b-lg mt-4">
                    <form action="{{ route('comment', $post->id) }}" method="post">
                        @csrf

                        @auth()
                            <textarea name="text" class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl" placeholder="Ваш комментарий..." spellcheck="false"></textarea>

                            @error('text')
                                {{ $message }}
                            @enderror

                        <button type="submit" class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg ">Написать </button>
                        @endauth
                    </form>

                    <div id="task-comments" class="pt-4">
                        <!--     comment-->
                        @foreach($post->comments as $comment)
                        <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                            <div class="flex flex-row justify-center mr-2">
                                <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">{{ $comment->user->name }}</h3>
                            </div>

                            <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $comment->text }}</p>
                        </div>
                        @endforeach
                        <!--  comment end-->
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
