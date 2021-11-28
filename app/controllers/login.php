<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Medlemssystem - Login</title>
  <meta name="Login Page" content="Login">
  <h1>Loginn</h1>
</head>
<body>
    <?php
    if(isset($_REQUEST['logginn'])) {

        // Include fil med passord:
        require_once("../../includes/includeDB.php"); 

        // Lager variabler for henting av passord og brukernavn
        $brukernavn = $_REQUEST['bnavn'];
        $passord = $_REQUEST['pord'];
        
        // Lager spørring
        $sql = "SELECT Fornavn, Etternavn, Passord
                FROM medlemmer WHERE Fornavn = ?";
        
        // Initialiserer spørringen og forberederen den m/ error catch
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            echo "Tilfeldig feil";
            exit(); 
        }
        
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

<form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="container">
        <label for="bnavn"><b>Brukernavn</b></label>
        <input type="text" placeholder="Skriv inn brukernavn" name="bnavn" required>

        <label for="pord"><b>Passord</b></label>
        <input type="password" placeholder="Skriv inn passord" name="pord" required>

        <input type="submit" name="logginn" value="Logg inn">
    </div>
</form>

</body>
</html>