<?php
    session_start();
    if(isset($_SESSION["Brukernavn"]) !== true) {
        header("Location: ../views/loginViews.php");
        exit();
    } else{
        


    }

    if (isset($_REQUEST['loggut'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../../index.php");
        exit();
    }
?>