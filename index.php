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

<form action="vendor/signin.php" method="post">
    <label for="">Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label for="">Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>

    <p>
        У вас нет аккаунта? - <a href="/register.php">Зарегистрироваться</a>
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