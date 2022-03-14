@extends('layouts.app')

@section('content')

{{-- {{ $posts }} --}}

<main class="py-4">
    <div class="container mx-auto px-5 py-2 lg:max-w-screen">

        <div class="max-w-screen-xl mx-auto p-5">
            <h1 class="text-3xl md:text-4xl font-medium mb-2">Pick a story from below! It's worth your time!</h1>
        </div>
        @if (Auth::check())
            <div class="max-w-screen-xl mx-auto p-5">
                <a href="/blog/create" class="inline md:hidden ml-0 rounded-lg px-4 py-2 border-2 border-primary text-primary hover:bg-primary hover:text-red-100 duration-300">Write a Post</a>
            </div>
        @endif
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">

                @foreach ($posts as $post)
                    <div class="rounded overflow-hidden shadow-lg">
                        <a href="/{{ $post->slug }}"><div class="relative">
                            <img class="w-full" src="{{ $post->image_path }}" alt="Sunset in the mountains">
                            <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                            <a href="#!">
                                <div class="absolute bottom-0 left-0 bg-primary px-4 py-2 text-white text-sm hover:bg-white hover:text-primary transition duration-500 ease-in-out">{{ $post->categories }}</div>
                            </a>
                            <a href="!#"><div class="text-sm absolute top-0 right-0 bg-primary px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-primary transition duration-500 ease-in-out">
                                <span class="font-bold">{{ date('d', strtotime($post->created_at)) }}</span>
                                <small>{{ date('F', strtotime($post->created_at)); }}</small>
                            </div></a>
                        </div></a>
                        <div class="px-6 py-4">
                            <a href="/{{ $post->slug }}" class="font-semibold text-lg inline-block hover:text-primary transition duration-500 ease-in-out">{{ $post->title }}</a>
                            <p class="text-gray-500 text-sm">
                                {{ \Illuminate\Support\Str::limit( $post->description, 150, $end='...' ) }}
                            </p>
                        </div>
                        <div class="px-6 py-4 flex flex-row items-center">
                            <span class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row justify-between items-center">
                                <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                                        c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                                        c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"/>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">@get_read_time($post->description)</span></span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection
