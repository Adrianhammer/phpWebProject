<?php

$sql = "SELECT * FROM medlemmer WHERE $felt1 = '$felt2' ORDER BY '$felt2'";
        
        // Setter sammen spørringen til tilkoblingen
        $stmt = $conn->prepare( $sql );
        
        // Utfører spørring
        $stmt->execute();
        
        // Henter resultat
        $resultat = $stmt->get_result();

?>