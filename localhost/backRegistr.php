<?php
$r_login = $_POST['login'];
$r_password = $_POST['password'];

$db = mysqli_connect('localhost' , 'root' ,'root' , 'social');
if(!$db){
    echo 'error';
}
$data = mysqli_query($db , "INSERT INTO `registration`(id,login,password) VALUES (NULL,'$r_login','$r_password')");
header("Location: index.php");

?>