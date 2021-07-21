<?php
session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">

</head>
<body>

<form action="">
    <img src="<?php $_SESSION['user']['photo_avatar'] ?>" alt="">
    <h2><?php $_SESSION['user']['full_name'] ?></h2>
    <a> <?php $_SESSION['user']['email'] ?></a>
    <a href="login.php">exit</a>

</form>



</body>
</html>
