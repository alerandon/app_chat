@extends('layouts.app')

@section('content')
<div class="container flex justify-center mx-auto">

            <div class="bg-gray-100 p-5 mb-10 rounded-lg w-4/6 sm:w-3/6 lg:w-2/6">
                <div class="flex text-center justify-center"><h1 class="font-medium text-xl">{{ __('Confirm Password') }}</h1></div>

                <div class="flex justify-center">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}" class="w-full md:w-5/6">
                        @csrf

                        <div class="my-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="bg-gray-200 focus:outline-none border border-gray-700 focus:shadow-outline rounded-lg py-2 px-4 block w-full appearance-none leading-normal @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="my-2">
                            <div class="flex-col">
                                <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-normal py-2 px-4 mb-2 rounded">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-xs font-normal text-blue-600 hover:underline" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</div>
@endsection
