<?php
    session_start();
    require_once 'connect.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

//проверка полей на пустоту
    $error_fields = [];

    if($email === ''){
        $error_fields[] = 'email';

    }

    if($password === ''){
        $error_fields[] = 'password';

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
//после проверки хешируем пароль
    $password = md5($_POST['password']);

//запрос к БД
    $chek_users = mysqli_query($link, "SELECT * FROM `users` WHERE `email`='$email'AND `password`='$password'");

   if (mysqli_num_rows($chek_users) > 0) {

        $user = mysqli_fetch_assoc($chek_users);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "email" => $user['email'],
        ];

        
        $response = [
            "status"=> true
        ];

        echo json_encode($response);
        //echo 'Авторизация прошла успешно';

    }else{

        $response = [
            "status"=> false,
            "message"=> 'Wrong login or password' 
        ];
        echo json_encode($response);
        //echo 'Неправильный логин или пароль';

    }
  
?>