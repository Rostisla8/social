<?php

function save_mess(){
global $connections;
$name = $_POST['name'];
$text = $_POST['text'];

 mysqli_query($connections , "INSERT INTO `gb`(name, text) VALUES ('$name' , '$text')");
}


function get_mess(){
    global $connections;
    $res = mysqli_query($connections , "SELECT * FROM `gb` ORDER BY id DESC");
    return mysqli_fetch_all($res , MYSQLI_ASSOC);
}

?>