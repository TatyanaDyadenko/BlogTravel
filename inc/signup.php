<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$email = $_POST['email'];
$password = ($_POST['password']);
$password_confirm =($_POST['password_confirm']);

//проверка на уникальность логина
$check_login = mysqli_query($link, "SELECT * FROM `users` WHERE `login`='$login'");

if (mysqli_num_rows($check_login) > 0){
    $response = [
        "status"=> false,
        "type" => 1,
        "message" => "Such login exists",
        "fields" => $error_fields

    ];

    echo json_encode($response);

    die();

}

//проверка полей на пустоту
$error_fields = [];

if($login === ''){
    $error_fields[]= 'login';  
}

if($email === ''){
    $error_fields[] = 'email';

}

if($password === ''){
    $error_fields[] = 'password';

}

if($password_confirm === ''){
    $error_fields[] = 'password_confirm';
}

if(!empty($error_fields)){
    $response = [
        "status"=> false,
        "type" => 1,
        "message" => "Fields must not be empty",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

if($password === $password_confirm){

$password = md5($password);

mysqli_query($link, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");

   $response = [
    "status"=> true,
];
echo json_encode($response);

//$_SESSION['message'] = 'Вы зарегестрированы';
//header('Location: ../check.php');

}else{
    $response = [
        "status"=> false,
        "message"=>'Password not confirm'
    ];
    echo json_encode($response);

    //$_SESSION['message']= 'Пароли не совпадают';
    //header('Location: ../regCheck.php');
}
?>