<?php

$sql = "SELECT * FROM medlemmer WHERE Fødselsdato BETWEEN ? AND ? ORDER BY Fødselsdato";

    // Setter sammen spørringen til tilkoblingen
    $stmt = $conn->prepare($sql);

    // Binder sammen variabler med SQL spørringen
    $stmt->bind_param("ss", $fromDate, $toDate);

    // Utfører spørring
    $stmt->execute();

    // Henter resultat
    $resultat = $stmt->get_result();

?>