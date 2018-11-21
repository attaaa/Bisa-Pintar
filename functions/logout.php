<?php
    session_start();
    header($_SESSION['location']);
    session_unset();
    session_destroy();
    
?>