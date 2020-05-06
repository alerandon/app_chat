@extends('layouts.app')

@section('content')

  <div class="md:hidden">

    <nav class="bg-gray-100 relative w-full h-auto z-10">
      <div class="flex justify-center">
        
          <div class="w-1/2">
            <router-link to="/chat" class="flex" active-class="border-b-2 border-gray-700">
              <p class="text-sm text-center w-full h-8 p-2">Chat</p>
            </router-link>
          </div>
        
          <div class="w-1/2">
            <router-link to="/users" class="flex" active-class="border-b-2 border-gray-700">
              <p class="text-sm text-center w-full h-8 p-2">Users</p>
            </router-link>
          </div>

      </div>
    </nav>
    
    <router-view></router-view>
    
  </div>

  <div class="hidden md:flex w-full h-full">
    <users class="md:w-3/12 lg:w-2/12 xxl:w-1/12"></users>
  <chat class="md:w-9/12 lg:w-10/12 xxl:w-11/12" user="{{ $user }}"></chat>
  </div>    
    
@endsection