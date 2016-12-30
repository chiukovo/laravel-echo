
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

import EchoLibrary from "laravel-echo"

window.Echo = new EchoLibrary({
    broadcaster: 'pusher',
    key: 'f79e5986783e3d4fc88b'
});

Echo.channel('chat-room.1')
.listen('ChatMessageWasReceived', (e) => {
    $('#message').append('<b>' + e.chatMessage + '</b></br>');
    $('#send').val('');
});