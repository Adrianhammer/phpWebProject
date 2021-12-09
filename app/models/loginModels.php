<?php

// Lager variabler for henting av passord og brukernavn
$brukernavn = $_REQUEST['bnavn'];
$passord = $_REQUEST['pord'];

// Lager spørring
$sql = "SELECT Fornavn, Etternavn, Brukernavn, Passord
        FROM medlemmer WHERE Brukernavn = ?";

// Initialiserer spørringen og forberederen den m/ error catch
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
    echo "Tilfeldig feil";
    exit(); 
}

?>