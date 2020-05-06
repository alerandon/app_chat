<template>

  <header class="bg-blue-800 p-2 sticky top-0 z-10">
    <div class="flex justify-between xl:mx-6">
      <div class="pl-3 xl:pl-0 w-1/2">
        <p class="text-white font-sans font-medium text-xl">The Chat</p>
      </div>
      <div class="pr-3 xl:pr-0 w-1/2">
        <button @click="isOpen = !isOpen" type="button" class="float-right md:hidden h-8 focus:outline-none">
          <img v-if="!isOpen" src="/assets/burger-menu.svg" class="w-4 h-4 mb-1 inline-block">
          <img v-if="isOpen" src="/assets/close-icon.svg" class="w-4 h-4 mb-1 inline-block">
        </button>
        <UserDropdown v-bind="$props" class="hidden md:block float-right"></UserDropdown>
      </div>
    </div>
    <nav v-if="auth_user == true" :class="isOpen ? 'block' : 'hidden'" class="flex flex-col w-full h-auto md:hidden">
      <div class="block px-4 py-2 border-b">
        <p class="text-white">{{ user_logged }}</p>    
      </div>
      <div class="block px-4 py-2">
        <a :href="sign_out" class="text-white hover:underline">Sign out</a>
      </div>
    </nav>
    <nav v-else :class="isOpen ? 'block' : 'hidden'" class="flex flex-col w-full h-auto md:hidden">
      <div class="block px-4 py-2 border-b">
        <a :href="sign_in" class="text-white">Sign In</a>    
      </div>
      <div class="block px-4 py-2">
        <a :href="register_user" class="text-white hover:underline">Register</a>
      </div>
    </nav>
  </header>

</template>

<script>

  import UserDropdown from './UserDropdown.vue';

  export default {
    
    components: {
      UserDropdown,
    },

    props: [
      'auth_user',
      'sign_out',
      'user_logged',
      'sign_in',
      'register_user',
    ],

    data() {
      return {
        users: [],
        isOpen: false,
      }
    },

  }
</script>