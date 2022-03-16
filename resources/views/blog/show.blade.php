@extends('layouts.app')

@section('content')

<article>
    <div class="container mx-auto px-5 py-2 lg:max-w-5xl my-20">
        <div class="prose-sm md:prose-xl">
            <h1 class="mb-5 font-sans">{{ $post->title }}</h1>
            <div class="flex items-center text-sm text-light gap-4 justify-between">
                <span>{{ date('d F Y', strtotime($post->created_at)) }}</span>
                <div class="bg-primary-gray p-3">
                    <span>Category: <span class="px-2 rounded-xl py-1 bg-secondary text-white">{{ $post->categories }}</span></span>
                    @if ($post->tags)
                        <span>Tags:<span class="px-2 rounded-xl py-1 bg-accent-github text-white">{{ $post->tags }}</span></span>
                    @endif
                </div>
            </div>
            <div class="mt-5 leading-loose flex flex-col post-body font-serif">
                {!!  $post->description !!}
            </div>
            <div class="mt-10 lg:flex items-center px-2 py3 single-blog-shaddow rounded md:max-w-screen-sm md:mx-auto md:items-center">
                <div class="text-center lg:text-left">
                    <img src="{{ asset('img/user-placeholder-40x40.png') }}" class="rounded-full w-12 mx-auto">
                </div>
                <div class="lg:pl-5 leading-loose text-center lg:text-left text-text-color w-full lg:w-5/6">
                    By <span class="font-bold">{{$post->user->name}}</span>
                </div>
            </div>
        </div>
    </div>
</article>

@endsection
