<?php
    // Include fil med passord:
    include_once "../../includes/includeDB.php";

    
    if(isset($_REQUEST['hent-medlem'])) {
        
        $fromDate = $_REQUEST['fromDate'];
        $toDate = $_REQUEST['toDate'];
        
    // Lager SQL spørringen som jeg skal bruke i $sql variablen.
    
    include ("../models/henteMedlemModels.php");

    ?>

    <html>
            <!-- Lager en tabell som viser de aktuelle konkuransene -->
            <table border="1" cellpadding="5" align="center" style="text-align:center">
            <tr>
                <th>Fornavn</th>
                <th>Etternavn</th>
                <th>Brukernavn</th>
                <th>Epost</th>
                <th>Mobilnummer</th>
                <th>Adresse</th>
                <th>Postnummer</th>
                <th>Poststed</th>
                <th>Kjønn</th>
                <th>Fødselsdato</th>
                <th>Medlem siden</th>
                <th>Interesser</th>
                <th>Kursaktiviteter</th>
                <th>Rolle 1</th>
                <th>Rolle 2</th>
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
            <td><?php echo $row['Brukernavn']; ?></td>
            <td><?php echo $row['Epost']; ?></td>
            <td><?php echo $row['Mobilnummer']; ?></td>
            <td><?php echo $row['Adresse']; ?></td>
            <td><?php echo $row['Postnummer']; ?></td>
            <td><?php echo $row['Poststed']; ?></td>
            <td><?php echo $row['Kjønn']; ?></td>
            <td><?php echo $row['Fødselsdato']; ?></td>
            <td><?php echo $row['MedlemSiden']; ?></td>
            <td><?php echo $row['Interesser']; ?></td>
            <td><?php echo $row['Kursaktiviteter']; ?></td>
            <td><?php echo $row['Rolle1']; ?></td>
            <td><?php echo $row['Rolle2']; ?></td>
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