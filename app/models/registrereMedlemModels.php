<?php

//include ("../controllers/registrereMedlemControllers.php");

$sql = "INSERT INTO medlemmer (Fornavn, Etternavn, Epost, Passord, Mobilnummer, Adresse, Kjønn, Fødselsdato, Interesser, Kursaktiviteter, Kontigentstatus) 
        VALUES ('$fnavn', '$enavn', '$epost', '$passord', '$mobilnummer', '$adresse', '$kjønn', '$fdato', '$interesser', '$kursaktiviteter', '$kontigentstatus')";

$query = mysqli_query($conn, $sql);

// Henter inn kun medlemmet hvor Navn og Etternavn er det samme som variabel inputten.
$sql = "SELECT * FROM medlemmer WHERE Fornavn = ? AND Etternavn = ?"; 

// Setter sammen spørringen til tilkoblingen
$stmt = $conn->prepare( $sql );

// Binder variablene sammen med SQL statementen.
mysqli_stmt_bind_param($stmt, "ss", $fnavn, $enavn);

// Utfører spørring
$stmt->execute();

// Henter resultat
$resultat = $stmt->get_result();

?>