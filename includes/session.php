<?php
    session_start();
    if(isset($_SESSION["Fornavn"]) !== true) {
        header("Location: ../controllers/login.php");
        exit();
    } else{
        


    }

    if (isset($_REQUEST['loggut'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../controllers/login.php");
        exit();
    }
?>