<?php
session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if($password === $password_confirm){

    $path = 'uploads/' . time() . $_FILES['photo_avatar']['name'];
    if (!move_uploaded_file($_FILES['photo_avatar']['tmp_name'] , '../' . $path)){
        $_SESSION['message'] = "Ошибка при загрузке фотографии";
        header('location: registration.php');
    }

    $password = md5($password);
    mysqli_query( $connect , "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `photo_avatar`) VALUES (NULL, '$full_name ', '$login', '$email ', '$password', '$path')");
    $_SESSION['message'] = "Регистрация прошла успешно";
    header('location: login.php');
}else {
    $_SESSION['message'] = "Пароли не совпадают";
    header('location: registration.php');
}



?>

