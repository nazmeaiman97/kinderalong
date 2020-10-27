<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-white bg-contain bg-center h-screen antialiased leading-none font-mono">

    <div id="no-app">
        <header class=" sticky h-22 bg-white py-8 uppercase  ">
            <div class="container mx-auto flex justify-between  ">


                    @guest
                    @if (\Request::is('admin'))
                    <div class="w-full ">
                    <button class="bg-blue-100 text-indigo-500 hover: font-bold py-4 px-4 rounded-full float-right"> <a
                            class="no-underline font-bold" href="{{ route('admin.login') }}">{{ __('Login') }}</a></button>
                    </div>
                    @endif
                    @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="no-underline hover:text-black" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')

    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
                delay:200,
                duration:1500,
                once:false,
            });
    </script>
</body>
</html>
