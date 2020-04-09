@extends('layouts.app')

@section('content')
<div class="container flex justify-center mx-auto">

            <div class="bg-gray-100 p-8 mb-10 rounded-lg w-5/6 sm:w-3/6 lg:w-2/6">
                <div class="flex text-center justify-center">{{ __('Verify Your Email Address') }}</div>

                <div class="flex justify-center">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="w-full md:w-5/6" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-normal py-2 px-4 mt-4 rounded">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>

</div>
@endsection
