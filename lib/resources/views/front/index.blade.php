<!DOCTYPE html>

<head>
    <title>Pusher Test</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    <script>
        $(document).ready(function(){
            Pusher.logToConsole = true;

            var pusher = new Pusher('5b92eafe26a3cfe66ada', {
                cluster: 'ap1'
            });

            var channel = pusher.subscribe('test-chat');
            channel.bind('App\\Events\\TestChat', function(data) {
                alert(JSON.stringify(data));
                // alert('clgt');
            });
        });
        // Enable pusher logging - don't include this in production
        
        // function addMessageDemo(data) {
        //     var liTag = $("<li class='list-group-item'></li>");
        //     console.log(data.msg)
        //     liTag.html(data.msg);
        //     $('#messages').append(liTag);
        // }
    </script>
    
</head>

<body>
    <h1>Pusher Test</h1>
    <p>
        Try publishing an event to channel <code>my-channel</code>
        with event name <code>my-event</code>.
    </p>
    <ul id="messages" class="list-group"></ul>
</body>
