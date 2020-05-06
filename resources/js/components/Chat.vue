<template>

    <div>
        
        <div class="flex flex-col-reverse absolute w-full md:w-9/12 lg:w-10/12 xxl:w-11/12 bottom-chat_bottom top-chat_top md:top-subnav z-0">

            <div class="flex flex-col max-h-full px-4 pt-4 overflow-y-auto break-words">
                <!--
                <div class="bg-gray-100 self-start max-w-message px-3 py-2 mb-4 rounded-lg" >
                    <div class="text-xs opacity-75">{{  }}</div>
                    <div class="text-base">{{  }}</div>
                </div>
                -->
                <div v-for="message in messages" :key="message.id" class="bg-blue-800 self-end max-w-message px-3 py-2 mb-4 rounded-lg">
                    <p class="text-base text-white">{{ message.text }}</p>
                </div>

            </div>

        </div>

        <form method="POST" v-on:submit.prevent="sendMessage">
            <div class="bg-gray-300 absolute w-full md:w-9/12 lg:w-10/12 xxl:w-11/12 bottom-0 z-10">
                <div class="flex justify-start px-2 py-1">
                    <img class="w-6 h-8 mt-1 mr-2" src="/assets/file-solid.svg" rel="files">
                    <img class="w-6 h-8 mt-1 mr-2" src="/assets/grin-solid.svg" rel="emoji">
                    <textarea class="bg-gray-100 rounded-full px-4 py-2 w-full focus:outline-none resize-none break-words" @keyup.enter="sendMessage" v-model="newMessage" rows="1" wrap="hard" name="message" placeholder="Message here" required autocomplete="on" autofocus></textarea>
                    <button type="submit" class="flex justify-center bg-blue-800 hover:bg-blue-700 focus:outline-none text-white block font-normal rounded-full w-10 min-w-10 h-10 ml-2">
                        <img type="image" src="/assets/paper-plane-solid.svg" class="w-5 h-5" rel="Send">
                    </button>
                </div>
            </div>
        </form>

    </div>        
        
</template>

<script>
    export default {

        props:['user'],

        data() {
            return {
                messages: [],
                newMessage: ''
            }
        },

        created() {
            this.fetchMessages();
        },

        methods: {
            fetchMessages() {
                axios.get('messages').then(response => {
                    this.messages = response.data
                })  
            },

            sendMessage() {
                this.messages.push({
                    message: this.newMessage
                });

                axios.post('messages', {message: this.newMessage});
                this.newMessage = ''
            }
        }
    }
</script>
