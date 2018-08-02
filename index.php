<!DOCTYPE html>
<html>
<head>
    <title>Ajax test</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="menu">
<a href="getTextHint/getTextHint.html" target="blank">Get Text Hint</a>
<a href="getArrayHint/getArrayHint.html" target="blank">Get Array Hint</a>   
</div>

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