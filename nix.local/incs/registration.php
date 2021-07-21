<?php
session_start();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

    <form action="signup.php"  method="post" enctype="multipart/form-data">
        <label > Имя</label>
        <label>
            <input name="full_name" type="text" placeholder="Введите полное имя">
        </label>
        <label > Login </label>
        <label>
            <input name="login" type="text" placeholder="Введите ваш логин">
        </label>
        <label > Email </label>
        <label>
            <input name="email" type="email" placeholder="Введите ваш email">
        </label>
        <label > Изображение профиля </label>
        <label>
            <input name="photo_avatar" type="file" >
        </label>
        <label > Пароль </label>
        <label>
            <input name="password" type="password" placeholder="Введите ваш пароль">
        </label>
        <label > Подтверждение пароля </label>
        <label>
            <input name="password_confirm" type="password" placeholder="Подтвердите ваш пароль">
        </label>
        <button type="submit">Зарегистрироваться</button>
        <p> У вас уже есть аккаунт? <a href="login.php">Войдите в аккаунт</a></p>
        <p> <a href="../index.php" class="back">  Вернуться на главную </a> </p>

        <?php
            if (isset($_SESSION['message'])){
                echo '<p class="message">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
        ?>

    </form>


</body>
</html>