<template>

  <header class="bg-blue-800 p-2 sticky top-0 z-10">
    <div class="flex justify-between">
      <div class="pl-3 w-1/2">
        <p class="text-white font-sans font-medium text-xl">The Chat</p>
      </div>
      <div class="pr-3 w-1/2">
        <button @click="isOpen = !isOpen" type="button" class="float-right md:hidden h-8 focus:outline-none">
          <img v-if="!isOpen" src="/assets/burger-menu.svg" class="w-4 h-4 mb-1 inline-block">
          <img v-if="isOpen" src="/assets/close-icon.svg" class="w-4 h-4 mb-1 inline-block">
        </button>
        <UserDropdown class="hidden md:block float-right" />
      </div>
    </div>
    <nav :class="isOpen ? 'block' : 'hidden'" class="flex flex-col w-full h-auto md:hidden">
      <div class="block px-4 py-2 border-b">
        <p class="text-white">Gabriel</p>    
      </div>
      <div class="block px-4 py-2">
        <a href="#" class="text-white">Sign out</a>
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
    data() {
      return {
        isOpen: false,
      }
    },
  }
</script>