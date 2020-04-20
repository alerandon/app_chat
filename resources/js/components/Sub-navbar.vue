<template>
    <nav class="bg-gray-100 p-2 absolute w-full top-subnav">
      <div class="flex justify-center">
        <div class="flex justify-center w-1/2">
          <p class="text-sm">Chat</p>
        </div>
        <div class="flex justify-center w-1/2">
          <p class="text-sm">Users</p>
        </div>
      </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>