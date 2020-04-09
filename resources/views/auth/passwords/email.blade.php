@extends('layouts.app')

@section('content')
<div class="container flex justify-center mx-auto">

            <div class="bg-gray-100 p-5 mb-10 rounded-lg w-4/6 sm:w-3/6 lg:w-2/6">
                <div class="flex text-center justify-center"><h1 class="font-medium text-xl">{{ __('Reset Password') }}</h1></div>

                <div class="flex justify-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="w-full md:w-5/6">
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

                        <div class="mt-4">
                            <div class="flex flex-col">
                                <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-normal py-2 px-4 mb-2 rounded">
                                    {{ __('Send Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</div>
@endsection
