<template>

    <div>
        
        <div class="flex flex-col-reverse absolute w-full md:w-9/12 lg:w-10/12 xxl:w-11/12 bottom-chat_bottom top-chat_top md:top-subnav z-0">

            <div class="flex flex-col max-h-full px-4 pt-4 overflow-y-auto break-words">

                <div class="bg-gray-100 self-start max-w-message px-3 py-2 mb-4 rounded-lg">
                    <div class="text-xs opacity-75">Mike</div>
                    <div class="text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam qui nemo ullam quae voluptates laborum ipsum cupiditate tempora incidunt labore placeat, tempore harum quos repellat cum provident magni quo odio doloremque quibusdam a accusantium hic impedit. Atque, ducimus, nemo optio in id deleniti cupiditate expedita repellat cumque numquam quam tenetur.</div>
                </div>
                <div class="bg-blue-800 self-end max-w-message px-3 py-2 mb-4 rounded-lg">
                    <p class="text-base text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit molestiae eveniet, accusantium similique recusandae ipsa? Consequatur amet magni ex sint voluptatum assumenda, hic, eum, dolorum saepe excepturi quam sunt inventore maxime illo! Assumenda ullam sunt in sequi odit temporibus dolor, nam ea adipisci cum modi quaerat quam eos harum recusandae accusamus labore molestiae perferendis laudantium. Sed inventore quod reprehenderit necessitatibus aspernatur odio cumque, dicta est fuga? Labore unde officiis sint!</p>
                </div>

                <div class="bg-blue-800 self-end max-w-message px-3 py-2 mb-4 rounded-lg">
                    <p class="text-base text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ipsa porro in beatae quisquam, maxime aliquid nemo explicabo totam nostrum maiores quidem quibusdam quam iure iste. Quis vel perspiciatis distinctio?</p>
                </div>
                <div class="bg-gray-100 self-start max-w-message px-3 py-2 mb-4 rounded-lg">
                    <div class="text-xs opacity-75">Mike</div>
                    <div class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sit quam illum architecto nihil, recusandae praesentium nostrum sed! Facilis, aspernatur!</div>
                </div>

                <div class="bg-gray-100 self-start max-w-message px-3 py-2 mb-4 rounded-lg">
                    <div class="text-xs opacity-75">Mike</div>
                    <div class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, quibusdam!</div>
                </div>
                <div class="bg-blue-800 self-end max-w-message px-3 py-2 mb-4 rounded-lg">
                    <p class="text-base text-white">Hola</p>
                </div>

                <div class="bg-gray-100 self-start max-w-message px-3 py-2 mb-4 rounded-lg">
                    <div class="text-xs opacity-75">Mike</div>
                    <div class="text-base">Este es un texto</div>
                </div>
                <div class="bg-blue-800 self-end max-w-message px-3 py-2 mb-4 rounded-lg">
                    <p class="text-base text-white">Hola</p>
                </div>

                <div class="bg-gray-100 self-start max-w-message px-3 py-2 mb-4 rounded-lg">
                    <div class="text-xs opacity-75">Mike</div>
                    <div class="text-base">Este es un texto</div>
                </div>
                <div class="bg-blue-800 self-end max-w-message px-3 py-2 mb-4 rounded-lg">
                    <p class="text-base text-white">Hola</p>
                </div>

                <div class="bg-gray-100 self-start max-w-message px-3 py-2 mb-4 rounded-lg">
                    <div class="text-xs opacity-75">Mike</div>
                    <div class="text-base">Este es un texto</div>
                </div>
                <div class="bg-blue-800 self-end max-w-message px-3 py-2 mb-4 rounded-lg">
                    <p class="text-base text-white">Hola</p>
                </div>

            </div>

        </div>

        <div class="bg-gray-300 absolute w-full md:w-9/12 lg:w-10/12 xxl:w-11/12 bottom-0 z-10">
          <div class="flex justify-start px-2 py-1">
            <img class="w-6 h-8 mt-1 mr-2" src="/assets/file-solid.svg" rel="files">
            <img class="w-6 h-8 mt-1 mr-2" src="/assets/grin-solid.svg" rel="emoji">
            <textarea class="bg-gray-100 rounded-full px-4 py-2 w-full focus:outline-none resize-none break-words" rows="1" wrap="hard" name="message" placeholder="Message here" required autocomplete="on" autofocus></textarea>
            <button type="submit" class="flex justify-center bg-blue-800 hover:bg-blue-700 focus:outline-none text-white block font-normal rounded-full w-10 min-w-10 h-10 ml-2">
                <img type="image" src="/assets/paper-plane-solid.svg" class="w-5 h-5" rel="Send">
            </button>
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
