<?php
    session_start();
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/second.css">

</head>
<body>

<form action="">

    <img src="<?php echo '../' . $_SESSION['user']['photo_avatar'] ?>"  width="350px" alt="">
    <h2> Имя Кролика : <?= $_SESSION['user']['full_name'] ?></h2>
    <a> Email Кролика : <?php echo $_SESSION ['user']['email'] ?></a>
    <p> <a href="../index.php" class="back"> Вернуться на главную </a> </p>
    <p > <a class="logout" href="logout.php" > Выход </a> </p>


</form>



</body>
</html>
