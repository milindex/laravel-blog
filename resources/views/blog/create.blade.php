@extends('layouts.app')

@section('content')
<div class="container mx-auto px-5 py-2 mt-8 lg:max-w-screen">
    @if ($errors->any())
        <ul class="grid lg:grid-cols-1 gap-4 lg:max-w-2xl">
            @foreach ( $errors->all() as $error)
                <li class="text-gray-50 bg-accent-mail py-5">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <h1 class="text-2xl md:text-3xl font-medium mb-2">Create a new Post!</h1>
    <div class="p-6">
        <div class="grid lg:grid-cols-1 gap-4 lg:max-w-2xl">
            <form action="/blog" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="border focus-within:border-primary focus-within:text-primary transition-all duration-500 relative rounded p-1 mb-4">
                    <div class="-mt-3 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="title" class="bg-white text-gray-600 px-1">Post Title*</label>
                        </p>
                    </div>
                    <p>
                        <input id="title" autocomplete="false" tabindex="0" name="title" type="text" class="py-1 px-1 text-gray-900 outline-none block h-full w-full">
                    </p>
                </div>
                <div class="border focus-within:border-primary focus-within:text-primary transition-all duration-500 relative rounded p-1 mb-4">
                    <div class="-mt-3 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="description" class="bg-white text-gray-600 px-1">Description</label>
                        </p>
                    </div>
                    <p>
                        <textarea id="post-description" name="description"></textarea>
                        {{-- <div id="post-description"></div> --}}
                    </p>
                </div>
                <div class="border focus-within:border-primary focus-within:text-primary transition-all duration-500 relative rounded p-1 mb-4">
                    <div class="-mt-3 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="featured-image" class="bg-white text-gray-600 px-1">Select an Image from your device</label>
                        </p>
                    </div>
                    <p>
                        <input autocomplete="false" class="py-1 px-1 outline-none block h-full w-full" name="image_path" type="file">
                    </p>
                </div>
                <div class="border focus-within:border-primary focus-within:text-primary transition-all duration-500 relative rounded p-1 mb-4">
                    <div class="-mt-3 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="category" class="bg-white text-gray-600 px-1">assign a Category</label>
                        </p>
                    </div>
                    <p>
                        <input autocomplete="false" tabindex="0" type="text" name="categories" class="py-1 px-1 outline-none block h-full w-full" list="categories">
                        <datalist id="categories">
                            @foreach ($categories as $option)
                            <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </datalist>
                    </p>
                </div>
                <div class="border focus-within:border-primary focus-within:text-primary transition-all duration-500 relative rounded p-1 mb-4">
                    <div class="-mt-3 absolute tracking-wider px-1 uppercase text-xs">
                        <p>
                            <label for="password" class="bg-white text-gray-600 px-1">assign a Tag</label>
                        </p>
                    </div>
                    <p>
                        <input autocomplete="false" tabindex="0" type="text" name="tag" class="py-1 px-1 outline-none block h-full w-full">
                    </p>
                </div>
                <div class="flex justify-center">
                    <button class="rounded text-gray-100 text-base px-5 py-2 bg-primary hover:shadow-inner hover:bg-accent-gitlab transition-all duration-300" type="submit">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
