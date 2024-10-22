<?php
    session_start();
    if ( !isset($_SESSION["user"])) {
        die("Требуется логин");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <script>
        function addMessage() {
            let url = "api/addMessage.php?msg=" 
                        + document.getElementById("msg").value;
            let xhr = new XMLHttpRequest();
            xhr.open("GET", url);
            xhr.send();
        }
    </script>
</head>
<body>
    <h1><?=$_SESSION["user"]?></h1>
    <input id="msg"> 
    <button onclick="addMessage();">Послать</button>
    <div id="display"></div>
</body>
<script>
    window.setInterval(function(){
        let url = "api/history.php";
        let xhr = new XMLHttpRequest();
        xhr.open("GET", url);
        xhr.onload = function(){
            let result = JSON.parse(xhr.responseText);
            console.log(result);
            document.getElementById("display").innerText = "";
    
            for(let i=0; i < result.length; i++) {
                let s = result[i][1] + " " 
                        + result[i][3] + "<br />"
                        + "<b>" + result[i][2] + "</b><br />";

                document.getElementById("display").innerHTML += s;
            }

        };
        xhr.send();
    },3000);
</script>
</html>