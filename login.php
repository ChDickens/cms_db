<?php
session_start();
include "function.php";
ob_start(); // стартует буфер

include "includes/db.php";

if (isset($_POST['login'])) {
    // значениея от пользователя
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_login = "SELECT * FROM users WHERE username = '$username'";
    $login_query = mysqli_query($connection, $sql_login);
    confirmQuery($login_query);

    foreach ($login_query as $item) {
        // значениея из базы данных
        $db_username = $item['username'];
        $db_password = $item['user_password'];
        $user_firstname = $item['user_firstname'];
    }


    if ($username !== $db_username && $password !== $db_password) {

        header("Location: /index.php",TRUE);

    } elseif($username == $db_username && $password == $db_password) {

        $_SESSION['username'] = $user_firstname;
        header("Location: /admin/index.php",TRUE);

    }
    ob_end_flush(); // прекращает буфер
}



?>