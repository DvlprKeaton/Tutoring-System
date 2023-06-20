<?php

$roomid = $_GET['roomid'];

  ?>
<html>

<head>
    <title>Tutoring System</title>
    <link rel="stylesheet" type="text/css" href="shareStyle.css">
</head>

<body>
    <p id="notification" hidden></p>
    <div class="entry-modal" id="entry-modal">
        <p>Join the class</p>
        <input id="room-input" class="room-input" <?php echo "value = '$roomid'";?>placeholder="Enter Room ID" hidden>
        <div>
            <button onclick="createRoom()" hidden="">Create Room</button>
            <button onclick="joinRoom()">Join Room</button>
        </div>
    </div>
    <div class="meet-area">
        <!-- Remote Video Element-->
        <video id="remote-video"></video>

        <!-- Local Video Element-->
        <video id="local-video"></video>
        <div class="meet-controls-bar" style="text-align: center;">
            <button onclick="startScreenShare()">Screen Share</button>
            <button onclick="window.location.href='sClassroom.php'">Leave Room</button>
        </div>
    </div>
</body>

<script src="https://unpkg.com/peerjs@1.3.1/dist/peerjs.min.js"></script>
<script src="shareScript.js"></script>

</html>