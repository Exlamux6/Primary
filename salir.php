<?php
    session_start();
    session_destroy();

    header("Location: login.php");
    setcookie(session_name(), '', time()-3600, '/');
?>