@extends('layouts.app')

@section('content')

{{-- {{ $posts }} --}}

<main class="py-4">
    <div class="container mx-auto px-5 py-2 lg:max-w-screen">

        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif

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
                <div class="transition block border border-lighter w-max mb-10 p-5 rounded single-blog-shaddow relative">
                    <a class="no-underline" href="/blog/{{ $post->slug }}">

                        @if ($post->image_path)
                        <div class="block h-post-card-image bg-cover bg-center bg-no-repeat w-max h-48 mb-5" style="background-image: url('{{ asset('/post_images/'. $post->image_path) }}')"></div>
                        @endif
                        <div class="category absolute top-5 right-5 px-1 py-1 bg-primary text-white">{{$post->categories}}</div>
                        <div class="flex flex-col justify-between flex-1 gap-8">
                            <div class="mb-4">
                                <h2 class="font-sans leading-normal block mb-6">
                                    {{ $post->title }}
                                </h2>

                                <p class="mb-6 font-serif leading-loose">
                                    {!!  \Illuminate\Support\Str::limit( $post->description, 150, $end='...' ) !!}
                                </p>
                            </div>

                            <div class="flex items-center text-sm text-light">
                                <img src="{{ asset('img/user-placeholder-40x40.png') }}" class="w-10 h-10 rounded-full" title="{{$post->user->name}}">
                                <span class="ml-2">{{$post->user->name}}</span>
                                <span class="ml-auto">{{ date('d F Y', strtotime($post->created_at)) }}</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</main>

@endsection
