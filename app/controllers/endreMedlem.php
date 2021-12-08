<?php 
include "../../includes/session.php";
include_once "../../includes/includeDB.php";


// Lager SQL spørringen som jeg skal bruke i $sql variablen.
//$sql = "SELECT * FROM medlemmer WHERE Fødselsdato BETWEEN ? AND ? ORDER BY Fødselsdato";
$sql = "SELECT * FROM medlemmer order by ID";

// Setter sammen spørringen til tilkoblingen
$stmt = $conn->prepare($sql);

// Binder sammen variabler med SQL spørringen
//$stmt->bind_param("ss", $fromDate, $toDate);

// Utfører spørring
$stmt->execute();

// Henter resultat
$resultat = $stmt->get_result();

?>

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
            <th>Endre</th>
            <th>Slett</th>
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
        <td><a href="../views/epostViews.php? id=<?php echo $row['ID']?>"><?php echo $row['Epost']; ?></a></td>
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
        <td><a href="../controllers/endreMedlemForm.php? id=<?php echo $row['ID']?>;">Endre</a></td>
        <td><a href="../controllers/slettMedlem.php? id=<?php echo $row['ID']?>;">Slett</a></td>

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



?>