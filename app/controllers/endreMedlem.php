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
            <th>ID</th>
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
            <th>Endre</th>
        </tr>

<?php 

// Henter en rad om gangen fra databasen (dvs. ett og ett medlem)
while( $row = $resultat->fetch_assoc() ) 
    { // Opening while

?>
    <tr>
        <td><?php echo $row['ID']; ?></td>
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
        <td><a href="endreMedlemForm.php? id=<?php echo $row['ID']?>;">Endre</a></td>
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