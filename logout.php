<?php
    session_start();

    header("Location: http://localhost/kams/login.php");
    session_destroy();
?>