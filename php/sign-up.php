<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Недопустимая длина логина";
        exit();
    } else if(mb_strlen($password) < 4 || mb_strlen($password) > 40) {
        echo "Недопустимая длина пароля";
        exit();
    }

    $password = md5($password."jAI$&e%4a*k7^4(6D@9(%e)3o%Sq*)&A($*Q");

    require "database.php";

    $mysql->query("INSERT INTO `users` (`login`, `password`, `email`) VALUES('$login', '$password', '$email')");

    $mysql->close();

    header('Location: /');
?>