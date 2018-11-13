<?php
    session_start();

    if (isset($_GET['masuk'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        if (($username == 'test') && ($password == 'test')) {
            $_SESSION['user'] = $username;
            $_SESSION['login'] = 'valid';
            //go to profil
        } else {
            $_SESSION['login'] = 'invalid';
            header('Location: ../');
        }
        
    }

?>