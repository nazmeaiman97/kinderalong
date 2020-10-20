@extends('layouts.app')

@section('content')


<!-- lOGIN FORM -->

<div class="relative bg-white overflow-hidden">
    <div class="max-w-screen-xl mx-auto">
        <div class="relative z-10 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>

            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">

            </div>



            <main class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28"
                data-aos="fade-right">



                <header
                    class="font-semibold   text-indigo-600 text-3xl text-center uppercase py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('A d m i n ') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="flex flex-wrap border-b border-purple-500 py-2">
                        <input id="email" type="email" placeholder="E-Mail" autocomplete="off"
                            class=" appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-pink-600 @error('email') border-red-500 @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>


                    <div class="flex flex-wrap border-b border-purple-500 py-2">


                        <input id="password" type="password" placeholder="Password" autocomplete="off"
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none  focus:border-pink-600 @error('password') border-red-500 @enderror"
                            name="password" required>


                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox border-purple-600"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>

                    <div class="mt-6">
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            Sign in
                        </button>
                    </div>

                </form>

            </main>
        </div>
    </div>

    <!-- PICTURE -->

    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 pt-10" data-aos="fade-left">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
            src="storage/svg/Admin-login.png"
            alt="">
    </div>
</div>

<!-- JOIN US SECTION -->
<div class="bg-gray-50 mt-10 pt-10">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
            Join Us!
            <br>
            <span class="text-indigo-600">Home Of Quality Schools </span>
        </h2>
        <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
            <div class="inline-flex rounded-md shadow">
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                    Get started
                </a>
            </div>
            <div class="ml-3 inline-flex rounded-md shadow">
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                    Learn more
                </a>
            </div>
        </div>
    </div>
</div>

<!-- start the bottom -->

@endsection

