<div class="container mx-auto px-5 py-2 lg:max-w-screen">
    <div class="flex items-center flex-col lg:flex-row">
        <a href="{{ url('/') }}" class="flex items-center no-underline text-brand text-primary uppercase font-bold text-xl">
            <img class="text-xl ml-3 w-36" src="{{ asset('img/logo_200x72.png') }}" alt="">
        </a>
        <div class="lg:ml-auto mt-5 lg:mt-0 flex items-center">
            <a href="{{ url('/trending')}}" class="ml-0 no-underline hover:underline uppercase flex justify-center items-center">What's Hot!
                @svg('img/fire-icon.svg', 'w-6 h-6 inline align-bottom')
            </a>
            <a href="{{ url('/about')}}" class="ml-5 no-underline hover:underline uppercase">About</a>
            @guest
            <a class="ml-5 no-underline hover:underline uppercase" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
            <a class="ml-5 no-underline hover:underline uppercase" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @else
            <span>{{ Auth::user()->name }}</span>

            <a href="{{ route('logout') }}" class="ml-5 no-underline hover:underline uppercase" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
            @endguest
        </div>
    </div>
</div>
