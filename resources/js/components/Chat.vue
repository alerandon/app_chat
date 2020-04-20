<template>

    <div class="">
        
        <div class="flex absolute w-full bottom-chat_bottom top-chat_top px-5 py-2 overflow-y-auto">

            <div class="flex flex-col">
                <div class="bg-gray-100 w-auto inline-block px-3 py-2 m-1 rounded-lg">
                    <p class="text-xs opacity-75">Mike</p>
                    <p class="text-base">Este es un texto</p>
                </div>
                <div class="bg-gray-100 w-auto inline-block px-3 py-2 m-1 rounded-lg">
                    <p class="text-xs opacity-75">Mike</p>
                    <p class="text-base">Este es un texto</p>
                </div>
                <div class="bg-gray-100 w-auto inline-block px-3 py-2 m-1 rounded-lg">
                    <p class="text-xs opacity-75">Mike</p>
                    <p class="text-base">Este es un texto</p>
                </div>
                <div class="bg-gray-100 w-auto inline-block px-3 py-2 m-1 rounded-lg">
                    <p class="text-xs opacity-75">Mike</p>
                    <p class="text-base">Este es un texto</p>
                </div>
                <div class="bg-gray-100 w-auto inline-block px-3 py-2 m-1 rounded-lg">
                    <p class="text-xs opacity-75">Mike</p>
                    <p class="text-base">Este es un texto</p>
                </div>

                <div class="bg-gray-100 w-auto inline-block px-3 py-2 m-1 rounded-lg">
                    <p class="text-xs opacity-75">Mike</p>
                    <p class="text-base">Este es un texto</p>
                </div>
                <div class="bg-gray-100 w-auto inline-block px-3 py-2 m-1 rounded-lg">
                    <p class="text-xs opacity-75">Mike</p>
                    <p class="text-base">Este es un texto</p>
                </div>
                <div class="bg-gray-100 w-auto inline-block px-3 py-2 m-1 rounded-lg">
                    <p class="text-xs opacity-75">Mike</p>
                    <p class="text-base">Este es un texto</p>
                </div> 
                <div class="bg-gray-100 w-auto inline-block px-3 py-2 m-1 rounded-lg">
                    <p class="text-xs opacity-75">Mike</p>
                    <p class="text-base">Este es un texto</p>
                </div>
                <div class="bg-gray-100 w-auto inline-block px-3 py-2 m-1 rounded-lg">
                    <p class="text-xs opacity-75">Mike</p>
                    <p class="text-base">Este es un texto</p>
                </div>
            </div>

        </div>

        <div class="bg-gray-300 flex justify-start absolute w-full bottom-0 justify-start px-2 py-1">
            <img class="w-8 h-10 mr-1" src="/assets/file.svg" rel="files">
            <img class="w-8 h-10 mr-2" src="/assets/emoji.svg" rel="emoji">
            <input type="text" class="bg-gray-100 rounded-lg p-2 w-full" name="message" placeholder="Message here">
            <input type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-normal rounded p-2 ml-2" name="send" value="Send">
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
