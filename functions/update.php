<?php
    session_start();

    if (isset($_GET['update'])) {
        $username = $_GET['uname'];
        $password = $_GET['pass'];
        $name = $_GET['nama'];
        $email = $_GET['email'];

        $user = array($username, $password, $name, $email);
        $_SESSION['user'] = $user;
        $_SESSION['update'] = 'valid';
        header('Location: ../profile.php');
    }
?>