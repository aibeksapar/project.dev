<?php
    setcookie('user', $user['email'], time() - 216000, "/");
    header('Location: /');
?>