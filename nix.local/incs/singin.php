<?php

session_start();
require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query( $connect , "SELECT * FROM `users`  WHERE  `login` = '$login' AND `password` = '$password' ");
    mysqli_query( $check_user ,"SET NAMES 'utf8'");


    if (mysqli_num_rows($check_user) > 0 ){

        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "full_name" => $user['full_name'],
            "photo_avatar" => $user['photo_avatar'],
            "email" => $user['email']
        ];
       header('location: profile.php');

    }else {
        $_SESSION['message'] = "Не верный логин или пароль";
        header('location: login.php');
    }

    ?>

