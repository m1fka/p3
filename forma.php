<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Здесь можно добавить код для сохранения данных в базу данных
    // Например, используя PDO или MySQLi

    echo "Регистрация прошла успешно!<br>";
    echo "Имя пользователя: " . $username . "<br>";
    echo "Email: " . $email;
} else {
    echo "Некорректный запрос.";
}
