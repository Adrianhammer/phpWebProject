<?php
    session_start();
    if(isset($_SESSION["Fornavn"]) !== true) {
        header("Location: ../controllers/login.php");
        exit();
    } else{
        echo "vELKOMMEN til din side<br><br>";
        echo "<a href='testhjemmeside.php'>Tilbake til hjemmesiden</a>";
    }

    if (isset($_REQUEST['loggut'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../controllers/login.php");
        exit();
    }
?>
