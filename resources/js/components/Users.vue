<template>
    <div class="flex justify-center md:justify-start p-5 md:p-0">
      <div class="bg-gray-100 w-10/12 md:w-3/12 lg:w-2/12 xxl:w-1/12 absolute top-chat_top md:top-subnav bottom-0 md:left-0 md:right-user_right py-4 my-6 md:my-0 rounded-lg md:rounded-none">
          <h1 class="text-lg text-center xl:text-left xl:pl-5 font-bold mb-2">Users connected</h1>
          <div class="overflow-y-auto">
            <ul class="">
                <li class="hover:bg-gray-200 pl-5 md:pl-10 lg:pl-5 py-1 mx-5 md:mx-auto">&bull; Brandon</li>
                <li class="hover:bg-gray-200 pl-5 md:pl-10 lg:pl-5 py-1 mx-5 md:mx-auto">&bull; Jose</li>
                <li class="hover:bg-gray-200 pl-5 md:pl-10 lg:pl-5 py-1 mx-5 md:mx-auto">&bull; Ricardo</li>
                <li class="hover:bg-gray-200 pl-5 md:pl-10 lg:pl-5 py-1 mx-5 md:mx-auto">&bull; Emily</li>
            </ul>
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