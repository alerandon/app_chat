<template>
  
  <div class="relative">
    <button @click="isOpen = !isOpen" type="button" class="h-8 focus:outline-none">
      <p class="text-white mx-4">
        Gabriel
        <img v-if="!isOpen" class="w-4 h-4 mb-1 inline-block" src="/assets/angle-down-solid.svg" rel="angle down">
        <img v-if="isOpen" class="w-4 h-4 mb-1 inline-block" src="/assets/angle-up-solid.svg" rel="angle up">      
      </p>    
    </button>
    <div :class="isOpen ? 'block' : 'hidden'" class="absolute right-0 py-2 mr-3 w-32 bg-gray-100 rounded-lg z-20 shadow-xl">
      <a href="#" class="block hover:bg-gray-300 px-4 py-2">Sign out</a>
    </div>        
  </div>

</template>

<script>
  export default {
    data() {
      return {
        isOpen: false,
      }
    },
    props: ['logout-route']
  }
</script>