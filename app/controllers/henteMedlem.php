<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hente Medlem</title>
  <meta name="Henter Medlemer fra Databasen" content="Medlem fra Database">
  <h1>Hent medlemmer</h1>
</head>
<body>
    <?php 
    include "../../includes/session.php";

        $senderName = "$_SESSION[Fornavn]" . " $_SESSION[Etternavn]";
        echo "<h2><br>Velkommen til hente medlemmer tjenesten, $senderName.<br></h2> "
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <h3>Hent medlemmer:</h3>
        <h4>Velg mellom hvilke dato du ønsker å hente medlemmer.</h4>  
        Fra dato:      
        <br><input type="date" name="fromDate" value="2011-01-05" required><br>   
        Til dato:    
        <br><input type="date" name="toDate" value="2009-01-08" required><br> 

    <br><input type="submit" name='hent-medlem' value="Hent Medlem">
    
    
    </form>
    
    <?php
    // Include fil med passord:
    include_once "../../includes/includeDB.php";

    
    if(isset($_REQUEST['hent-medlem'])) {
        
        $fromDate = $_REQUEST['fromDate'];
        $toDate = $_REQUEST['toDate'];
        
    // Lager SQL spørringen som jeg skal bruke i $sql variablen.
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

    <html>
            <!-- Lager en tabell som viser de aktuelle konkuransene -->
            <table border="1" cellpadding="5" align="center" style="text-align:center">
            <tr>
                <th>Fornavn</th>
                <th>Etternavn</th>
                <th>Epost</th>
                <th>Mobilnummer</th>
                <th>Adresse</th>
                <th>Kjønn</th>
                <th>Fødselsdato</th>
                <th>Interesser</th>
                <th>Interesser2</th>
                <th>Kursaktiviteter</th>
                <th>Kontigentstatus</th>
            </tr>

    <?php 

    // Henter en rad om gangen fra databasen (dvs. ett og ett medlem)
    while( $row = $resultat->fetch_assoc() ) 
        { // Opening while

    ?>
        <tr>
            <td><?php echo $row['Fornavn']; ?></td>
            <td><?php echo $row['Etternavn']; ?></td>
            <td><?php echo $row['Epost']; ?></td>
            <td><?php echo $row['Mobilnummer']; ?></td>
            <td><?php echo $row['Adresse']; ?></td>
            <td><?php echo $row['Kjønn']; ?></td>
            <td><?php echo $row['Fødselsdato']; ?></td>
            <td><?php echo $row['Interesser']; ?></td>
            <td><?php echo $row['Interesser2']; ?></td>
            <td><?php echo $row['Kursaktiviteter']; ?></td>
            <td><?php echo $row['Kontigentstatus']; ?></td>
        </tr>

        <?php
            } // Closing while

            // Avslutter spørring 
            $stmt->close();
        ?>
        </table>
        
        <?php 
            // Avslutter databasetilkobling
            $conn->close();
    }
        ?>