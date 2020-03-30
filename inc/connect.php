<?php
//подключение к базе данных
$link = mysqli_connect('localhost','root','','test');
if(!$link){
    die('Error connect to database');
}

?>