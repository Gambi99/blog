@extends('layout.admin')
@section('title', 'Show')

@section('content')

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Читать</h3>

            <div class="mt-8">

            </div>

            <div class="mt-8">
                <p type="text" class="w-full h-12 border border-gray-800 rounded px-3">{{ $post->title }}</p>


                <p type="text" class="w-full h-12 border border-gray-800 rounded px-3">{{ $post->preview }}</p>

                <p type="text" class="w-full h-12 border border-gray-800 rounded px-3">{{ $post->description }}</p>


                    <div>
                        <img class="h-64 w-64" src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
                    </div>

                    <input type="file" class="w-full h-12" placeholder="Обложка" />
            </div>
        </div>
    </main>

@endsection
