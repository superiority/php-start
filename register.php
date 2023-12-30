<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user']) {
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

<form action="vendor/sign-up.php" method="post" enctype="multipart/form-data">
    <label for="">ФИО</label>
    <input type="text" name="full_name" placeholder="Введите свое полное имя">
    <label for="">Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Введите mail">


    <label for="">Изображение профиля</label>
    <input type="file" name="avatar">

    <label for="">Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label for="">Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">

    <button type="submit">Войти</button>
    <p>
        У вас уже есть аккаунт? - <a href="/index.php">Войти</a>
    </p>
    <?php
    if (array_key_exists('message', $_SESSION)) {
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset ($_SESSION['message']);
    ?>


</form>

</body>
</html>