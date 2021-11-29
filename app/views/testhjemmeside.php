<?php
    session_start();
    if(isset($_SESSION["Fornavn"]) !== true) {
        header("Location: ../controllers/login.php");
        exit();
    } else{
        echo "<h2>Velkommen til medlemssystemets hjemmeside</h2><br><br>";
        echo "<a href='minSideViews.php'>Gå til Min Side<br><br></a>";
    }

    if (isset($_REQUEST['loggut'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../controllers/login.php");
        exit();
    }
?>

<form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="request">
<input type="submit" name="loggut" value="Logg Ut">
</form>