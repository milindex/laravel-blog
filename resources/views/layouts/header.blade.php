@if(Auth::check())
<div class="h-8 bg-accent-github text-white flex flex-wrap justify-center items-center">
    This will be an admin bar for the authorised users!
</div>
@endif
<div class="container mx-auto px-5 py-2 lg:max-w-screen">
    <div class="flex items-center flex-col lg:flex-row">
        <a href="{{ url('/') }}" class="flex items-center no-underline text-brand text-primary uppercase font-bold text-xl">
            <img class="text-xl ml-3 w-auto" src="{{ asset('img/logo_52x52.png') }}" alt="">
            <div class="break-words w-32 flex text-center">
                Milind's Thoughts
            </div>
        </a>
        <div class="lg:ml-auto mt-5 lg:mt-0 flex items-center">
            @if(Auth::check())
            <a href="/blog/create" class="hidden md:inline ml-0 rounded-lg px-4 py-2 border-2 border-solid no-underline border-primary text-primary hover:bg-primary hover:text-red-100 duration-300">Write a Post</a>
            @endif
            <a class="ml-0 md:ml-5 no-underline hover:underline uppercase flex justify-center items-center" href="{{ url('/trending')}}">What's Hot!
                @svg('img/fire-icon.svg', 'w-6 h-6 inline align-bottom')
            </a>
            @guest
            <a class="ml-5 no-underline hover:underline uppercase" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
            <a class="ml-5 no-underline hover:underline uppercase" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @else
            <a class="ml-5 no-underline hover:underline uppercase" href="#">{{ Auth::user()->name }}</a>
            {{-- <a class="ml-5 no-underline hover:underline uppercase" href="{{ route('profile') }}">{{ Auth::user()->name }}</a> --}}

            <a href="{{ route('logout') }}" class="ml-5 no-underline hover:underline uppercase" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
            @endguest
        </div>
    </div>
</div>
