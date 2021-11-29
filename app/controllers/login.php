<?php
    if(isset($_REQUEST['logginn'])) {

        // Include fil med passord:
        require_once("../../includes/includeDB.php");
        include("../models/loginModels.php"); 
        
        // Binder sammen $brukernavn variabel med spørringen
        mysqli_stmt_bind_param($stmt, "s", $brukernavn);
        
        // Utfører spørring
        mysqli_stmt_execute($stmt);

        // Henter resultat fra spørringen
        $medlem = mysqli_stmt_get_result($stmt);

        // Henter ut resultatet i form av en array
        $bruker = mysqli_fetch_assoc($medlem);       

        // Lager ny variabel for the krypterte passordet i Databasen.
        $hashedPassord = $bruker['Passord'];
       
        // Sjekker passord inputen, mot det krypterte passordet i databasen
        $sjekkPass = password_verify($passord, $hashedPassord);
        
        // Lager en løkke for å sjekke om passordet fungerer, hvis ikke så printer den feilmelding.
        if($sjekkPass === TRUE) {
            //Passord matcher, setter session:
            session_start();
            $_SESSION['Etternavn'] = $bruker['Etternavn'];
            $_SESSION['Fornavn'] = $bruker['Fornavn'];

            // Videresender brukeren til innsiden av systemet
            header("Location: ../views/testhjemmeside.php");
            exit();
        } else if ($sjekkPass === FALSE) {
            echo "Brukernavn og/eller passord er ikke riktig.";
        }
        mysqli_stmt_close($stmt);
    }
?>