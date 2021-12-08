<?php

$sql = "INSERT INTO aktiviteter (Aktivitet, Ansvarlig, Starttid, Slutttid, Dato) 
    VALUES ('$aktivitet', '$ansvarlig', '$timeFrom', '$timeTo', '$fromDate')";
 
    $query = mysqli_query($conn, $sql);

    // Henter inn kun medlemmet hvor Navn og Etternavn er det samme som variabel inputten.
    $sql = "SELECT * FROM aktiviteter"; 

    // Setter sammen spørringen til tilkoblingen
    $stmt = $conn->prepare( $sql );

    // Utfører spørring
    $stmt->execute();

    // Henter resultat
    $resultat = $stmt->get_result();
    
?>