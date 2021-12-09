<?php


$sql = "INSERT INTO medlemmer (Fornavn, Etternavn, Brukernavn, Epost, Passord, Mobilnummer, Adresse, Postnummer, Poststed, Kjønn, Fødselsdato, MedlemSiden, Interesser, Kursaktiviteter, Rolle1, Rolle2, Kontigentstatus) 
    VALUES ('$fnavn', '$enavn', '$bnavn', '$epost', '$passord', '$mobilnummer', '$adresse', '$postnummer', '$poststed', '$kjønn', '$fdato', '$medlemsiden', '$interesser', '$kursaktiviteter', '$rolle1', '$rolle2', '$kontigentstatus')";
 
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