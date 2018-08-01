//items array
var items = [];


function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("dropdown-list").innerHTML = "";
        // return;
    } else {
        items = [];
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                items = JSON.parse(this.responseText);
                renderItems(items);
            }
        };
        xmlhttp.open("GET", "getArrayHint.php?q=" + str, true);
        xmlhttp.send();
    }
}

//render items
function renderItems(items){
  let list = "";
  items.forEach(function(item){
    list += "<p class='dropdown-item' onclick='updateInput(this)'>" + item + "</p>";
  });
  document.getElementById("dropdown-list").innerHTML = list;
}

function updateInput(id){
  document.getElementById("dropdown-input").value = id.innerHTML;
}