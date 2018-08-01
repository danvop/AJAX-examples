<!DOCTYPE html>
<html>
<head>
    <title>Ajax test</title>
</head>
<body>
<a href="getTextHint.html" target="blank">Get Text Hint</a>
<button onclick="openAjax()">Open Request</button>
<button onclick="sendAjax()">Send Request</button>
</body>

<script>
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        console.log(xhttp);    
    };
    function openAjax(){
        xhttp.open("GET", "text.txt", true);      
    }

    function sendAjax(){
        xhttp.send();
    }
</script>
</html>