<?php

    session_start();
    if(isset($_SESSION["Fornavn"]) !== true) {
        header("Location: ../controllers/login.php");
        exit();
    } else{
        echo "Velkommen til din side<br><br>";
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

<table border="1">
    <tr>
        <td>Fornavn</td>
        <td>Etternavn</td>
        <td>Epost</td>
        <td>Mobilnummer</td>
        <td>Adresse</td>
        <td>Kjønn</td>
        <td>Fødselsdato</td>
    </tr>

<?php
include ("../../includes/includeDB.php");
require_once ("../models/minSideModels.php");


while($data = mysqli_fetch_array($records)) {
    ?>
    <tr>
        <td><?php echo $data["Fornavn"]; ?></td>
        <td><?php echo $data["Etternavn"]; ?></td>
        <td><?php echo $data["Epost"]; ?></td>
        <td><?php echo $data["Mobilnummer"]; ?></td>
        <td><?php echo $data["Adresse"]; ?></td>
        <td><?php echo $data["Kjønn"]; ?></td>
        <td><?php echo $data["Fødselsdato"]; ?></td>
    </tr>
<?php
}
?>


