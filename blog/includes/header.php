<?php
include 'core/core.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? 'Блог' ?></title>
</head>
<body>
<nav>
    <a href="http://blog/">Главная</a> |
    <a href="about.php">Обо мне</a> |
    <?php if(!$user): ?>
    <a href="auth.php">Авторизация</a> |
    <a href="reg.php">Регистрация</a> |
    <?php else: ?>
    <a href="post-create.php">Создать пост</a> |
    <a href="logout.php">Выход</a>
    <?php endif; ?>
</nav>