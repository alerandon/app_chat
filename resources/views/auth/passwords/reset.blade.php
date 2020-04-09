@extends('layouts.app')

@section('content')
<div class="container flex justify-center mx-auto">

            <div class="bg-gray-100 p-8 mb-10 rounded-lg w-5/6 sm:w-3/6 lg:w-2/6">
                <div class="flex text-center justify-center"><h1 class="font-medium text-xl">{{ __('Reset Password') }}</h1></div>

                <div class="flex justify-center">
                    <form method="POST" action="{{ route('password.update') }}" class="w-full md:w-5/6">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="my-2">
                            <label for="email" class="text-xs mb-1">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-700 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-700 rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="my-2">
                            <label for="password-confirm" class="text-xs mb-1">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="bg-gray-200 focus:outline-none focus:shadow-outline border border-gray-700 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        
                        <div class="flex justify-center">
                            <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-normal py-2 px-4 mt-4 rounded">
                                {{ __('Reset Password') }}
                            </button>
                        </div>        
                        
                    </form>
                </div>
            </div>

</div>
@endsection
