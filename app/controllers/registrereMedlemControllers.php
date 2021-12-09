<?php
include_once ("../../includes/includeDB.php");

            
if(isset($_REQUEST['registrer'])) {            

    $fnavn = $_REQUEST['navn'];
    $enavn = $_REQUEST['enavn'];
    $bnavn = $_REQUEST['brukernavn'];
    $epost = $_REQUEST['epost'];
    $passord = password_hash($_REQUEST['passord'], PASSWORD_DEFAULT); //Hasher passordet før det sendes til DB
    $mobilnummer = $_REQUEST['tlf'];
    $adresse = $_REQUEST['adresse'];
    $postnummer = $_REQUEST['postnummer'];
    $poststed = $_REQUEST['poststed'];
    $kjønn = $_REQUEST['kjønn'];
    $fdato = $_REQUEST['fdato'];
    $medlemsiden = date('Y-m-d H:i:s');
    $interesser = $_REQUEST['interesser'];
    $kursaktiviteter = $_REQUEST['kursaktiviteter'];
    $rolle1 = $_REQUEST['rolle1'];
    $rolle2 = $_REQUEST['rolle2'];
    $kontigentstatus = $_REQUEST['kontigent'];
 
    
    include ("../models/registrereMedlemModels.php");
    
?>

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
    <th>Fødseldato</th>
    <th>Medlem siden</th>
    <th>Interesser</th>
    <th>Kursaktiviteter</th>
    <th>Rolle 1</th>
    <th>Rolle 2</th>
    <th>Kontigentstatus</th>
</tr>

<?php
    if ($query) {
        echo '<script type="text/javascript"> alert("Medlem registrert")</script>';
        echo "<br><strong>Informasjon registrert:</strong><br>";
        
        // Henter en rad om gangen fra databasen (dvs. ett og ett medlem)
        while( $row = $resultat->fetch_assoc() ) 
        { 
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
    
} 

$stmt->close();
?>
</table>

<?php 
$conn->close();
        }
    }
?>