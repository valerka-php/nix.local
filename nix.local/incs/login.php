<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="../css/main.css">

</head>
<div>

</div>


<form action="singin.php" method="post">
    <label > Логин </label>
    <label>
        <input name="login" type="text" placeholder="Введите логин">
    </label>
    <label > Пароль </label>
    <label>
        <input name="password" type="password" placeholder="Введите пароль">
    </label>
    <button type="submit">Войти</button>
    <p> У вас нет аккаунта? <a href="registration.php">Зарегистрируйтесь</a></p>
    <p> <a href="../index.php" class="back"> Вернуться на главную </a> </p>

    <?php
    session_start();
        if (isset($_SESSION['message'])) {
            echo '<p class="message">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
    ?>

</form>


</body>
</html>