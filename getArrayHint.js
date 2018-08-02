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

function renderItems(items){
  let elem; //created element
  let dropDownList = document.getElementById("dropdown-list");
  dropDownList.innerHTML = "";
  items.forEach(function(item){
    elem = document.createElement('p');
    elem.innerHTML = item;
    elem.className = "dropdown-item";
    elem.onclick = function(){updateInput(this);};
    dropDownList.appendChild(elem);
  });
}

function updateInput(id){
  document.getElementById("dropdown-input").value = id.innerHTML;
}