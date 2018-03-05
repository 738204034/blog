<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Chat</title>
</head>
<body>
<h1>Simple Chat</h1>
<input type="text" id="msg">
<button type="button" id="send">send</button>
<div id="content"></div>
</body>

<script type="text/javascript">
    window.onload = function () {
        var ws = new WebSocket("ws://127.0.0.1:2347");

        document.getElementById("send").onclick = function () {
            var msg = document.getElementById("msg").value;
            ws.send(msg);
        };

        ws.onopen = function () {
            console.log("连接成功");
            //            ws.send('raid');
        };
        ws.onmessage = function (e) {
            document.getElementById("content").innerHTML += "<h2>" + e.data + "</h2>";
        };
    };
</script>
</html>