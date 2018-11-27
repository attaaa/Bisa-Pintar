<?php
    session_start();

    if (isset($_GET['masuk'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        $email = 'test@gmail.com';
        $name = 'test';
        if (($username == 'test') && ($password == 'test')) {
            $_SESSION['user'] = $username;
            $user = array($username, $password, $name, $email);
            $_SESSION['user'] = $user;
            $_SESSION['login'] = 'valid';
            header('Location: ../profile.php');
        } else {
            $_SESSION['login'] = 'invalid';
            header('Location: ../');
        }
    }

?>