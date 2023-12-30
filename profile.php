<?php
session_start();

if (!isset($_SESSION['user']) && $_SESSION['user']) {
    header('Location: profile.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<!-------Профиль-------->
<form>
    <img class="avatar" src="<?= $_SESSION['user']['avatar'] ?>" alt="avatar">
    <h2 style="margin: 10px 0"><?= $_SESSION['user']['full_name'] ?></h2>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="vendor/logout.php" class="logout">Выход</a>
</form>

</body>
</html>