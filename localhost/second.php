<?php
session_start();

$login = $_POST['login'];
$password = $_POST['password'];
$_SESSION['login'] = $login;
$_SESSION['password'] = $password;


$db = mysqli_connect('localhost' , 'root' ,'root' , 'social');
if(!$db){
    echo 'error';
}
$data = mysqli_query($db , "SELECT * FROM `registration`");


foreach($data as $item){
    if($item['login'] == $_SESSION['login'] && $item['password'] == $_SESSION['password']){
        header("Location: main.php");
    }
}

?>