<?php
// Array with names
$a = ["Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", "Gunda", "Hege", "Inga", "Johanna", "Kitty", "Linda", "Nina", "Ophelia", "Petunia", "Amanda", "Raquel", "Cindy", "Doris", "Eve", "Evita", "Sunniva", "Tove", "Unni", "Violet", "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky"];

// get the q parameter from URL
$q = $_REQUEST["q"];

$hints = [];

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        // if (stristr($q, substr($name, 0, $len))) {
        if ($q == strtolower(substr($name, 0, $len))) {
            $hints[]= $name;
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo  $hints === "" ? "no suggestion" : json_encode($hints);
?>