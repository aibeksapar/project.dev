<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $password = md5($password."jAI$&e%4a*k7^4(6D@9(%e)3o%Sq*)&A($*Q");

    require "database.php";

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('user', $user['email'], time() + 216000, "/");

    $mysql->close();

    header('Location: /');
?>