@extends('layouts.app')

@section('content')

  <div class="-mt-12 md:hidden">

    <nav class="bg-gray-100 absolute w-full top-subnav z-10">
      <div class="flex justify-center">
        
          <div class="w-1/2">
            <router-link to="/chat" class="flex" active-class="border-b-2 border-gray-700">
              <div class="text-sm text-center w-full h-subnav p-2">Chat</div>
            </router-link>
          </div>
        
          <div class="w-1/2">
            <router-link to="/users" class="flex" active-class="border-b-2 border-gray-700">
              <div class="text-sm text-center w-full h-subnav p-2">Users</div>
            </router-link>
          </div>

      </div>
    </nav>
    
    <router-view></router-view>
    
  </div>

  <div class="hidden md:flex w-full h-full">
    <users class="md:w-3/12 lg:w-2/12 xxl:w-1/12"></users>
    <chat class="md:w-9/12 lg:w-10/12 xxl:w-11/12"></chat>
  </div>    
    
@endsection