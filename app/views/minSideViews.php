<?php

include_once ("../../includes/session.php");

    echo "Velkommen til din side $_SESSION[Fornavn]! <br><br>";
    echo "<a href='testhjemmeside.php'>Tilbake til hjemmesiden</a><br>";

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


