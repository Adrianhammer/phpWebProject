<?php
include_once ("../../includes/includeDB.php");
//include ("../models/registrereMedlemModels.php");
            
if(isset($_REQUEST['registrer'])) {            

    $fnavn = $_REQUEST['navn'];
    $enavn = $_REQUEST['enavn'];
    $epost = $_REQUEST['epost'];
    $passord = password_hash($_REQUEST['passord'], PASSWORD_DEFAULT); //Hasher passordet før det sendes til DB
    $mobilnummer = $_REQUEST['tlf'];
    $adresse = $_REQUEST['adresse'];
    $kjønn = $_REQUEST['kjønn'];
    $fdato = $_REQUEST['fdato'];
    $interesser = $_REQUEST['interesser'];
    $kursaktiviteter = $_REQUEST['kursaktiviteter'];
    $kontigentstatus = $_REQUEST['kontigent'];
 
$sql = "INSERT INTO medlemmer (Fornavn, Etternavn, Epost, Passord, Mobilnummer, Adresse, Kjønn, Fødselsdato, Interesser, Kursaktiviteter, Kontigentstatus) 
    VALUES ('$fnavn', '$enavn', '$epost', '$passord', '$mobilnummer', '$adresse', '$kjønn', '$fdato', '$interesser', '$kursaktiviteter', '$kontigentstatus')";
 
 $query = mysqli_query($conn, $sql);

// Henter inn kun medlemmet hvor Navn og Etternavn er det samme som variabel inputten.
$sql = "SELECT * FROM medlemmer WHERE Fornavn = ? AND Etternavn = ?"; 

// Setter sammen spørringen til tilkoblingen
$stmt = $conn->prepare( $sql );

// Binder variablene sammen med SQL statementen.
mysqli_stmt_bind_param($stmt, "ss", $fnavn, $enavn);

// Utfører spørring
$stmt->execute();

// Henter resultat
$resultat = $stmt->get_result();

?>

<table border="1" cellpadding="5" align="center" style="text-align:center">
<tr>
    <th>Fornavn</th>
    <th>Etternavn</th>
    <th>Epost</th>
    <th>Mobilnummer</th>
    <th>Adresse</th>
    <th>Kjønn</th>
    <th>Fødseldato</th>
    <th>Interesser</th>
    <th>Kursaktiviteter</th>
    <th>Kontigentstatus</th>
</tr>
 
<?php

    
    // Setter opp en foreach lække som går gjennom hvert element i listen og printer ut med print_r
    // Bekreftelsen på registrering til bruker
    if ($query) {
        echo "Du er registrert med følgende informasjon:<br>";
        echo "<br>";
        echo "<br><strong>Inormasjon registrert:</strong><br>";
        
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
    }
?>