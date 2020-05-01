<template>
    <div class="flex justify-center md:justify-start w-full h-full p-5 md:p-0">
      <div class="bg-gray-100 w-10/12 md:w-3/12 lg:w-2/12 xxl:w-1/12 absolute top-chat_top md:top-subnav bottom-0 md:left-0 md:right-user_right py-4 my-6 md:my-0 rounded-lg md:rounded-none">

        <div class="mx-auto md:mx-0 w-5/6 md:w-auto">            
          <h1 class="text-lg text-center md:text-left md:px-8 py-2 font-bold">Users online</h1>
          <div class="overflow-y-auto">
            <ul class="">
                <li class="px-4 md:px-8 py-2 hover:bg-gray-200">&bull; Brandon</li>
                <li class="px-4 md:px-8 py-2 hover:bg-gray-200">&bull; Jose</li>
                <li class="px-4 md:px-8 py-2 hover:bg-gray-200">&bull; Ricardo</li>
                <li class="px-4 md:px-8 py-2 hover:bg-gray-200">&bull; Emily</li>
            </ul>
          </div>
        </div>  
        
      </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>