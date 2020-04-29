@extends('layouts.app')

@section('content')
<div class="container flex justify-center mx-auto mt-12">

            <div class="bg-gray-100 p-5 mb-10 rounded-lg w-4/6 sm:w-3/6 lg:w-2/6">
                <div class="flex text-center justify-center">
                    <h1 class="font-medium text-xl">{{ __('Login') }}</h1>
                </div>

                <div class="flex justify-center">
                    <form method="POST" action="{{ route('login') }}" class="w-full md:w-5/6">
                        @csrf

                        <div class="my-2">
                            <label for="email" class="text-xs mb-1">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="bg-gray-200 focus:outline-none border border-gray-700 focus:shadow-outline rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="my-2">
                            <label for="password" class="text-xs mb-1">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-700 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="my-2">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="font-medium text-xs mb-1" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="my-2">
                            <div class="flex flex-col">
                                <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-normal py-2 px-4 mb-2 rounded">
                                    {{ __('Login') }}
                                </button>

                               
                                <div class="flex-col text-center inline-block">
                                     @if (Route::has('password.request'))
                                     <a class="text-xs font-normal text-blue-600 hover:underline" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                    <p class="text-xs mt-1">Are you new? 
                                    <a href="/register" class=" font-normal text-blue-600 hover:underline">Register here</a></p>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</div>
@endsection
