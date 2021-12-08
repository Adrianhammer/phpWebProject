<?php

$sql = "INSERT INTO aktiviteter (Aktivitet, Ansvarlig, Starttid, Slutttid, Dato) 
    VALUES ('$aktivitet', '$ansvarlig', '$timeFrom', '$timeTo', '$fromDate')";
 
    $query = mysqli_query($conn, $sql);

    // Henter inn kun medlemmet hvor Navn og Etternavn er det samme som variabel inputten.
    $sql = "SELECT * FROM aktiviteter"; 

    // Setter sammen spørringen til tilkoblingen
    $stmt = $conn->prepare( $sql );

    // Binder variablene sammen med SQL statementen.
    //mysqli_stmt_bind_param($stmt, "sssss", $$aktivitet, $$ansvarlig, $timeFrom, $timeTo, $fromDate);

    // Utfører spørring
    $stmt->execute();

    // Henter resultat
    $resultat = $stmt->get_result();

    
?>