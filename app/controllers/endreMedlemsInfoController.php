<?php
include_once ("../../includes/includeDB.php");
include ("../models/endreMedlemsInfoModels.php");


echo "<br>Velg medlem</br>";

/* if ($r_set=$conn->query($result)) {
    echo"<select name=members class='form-control' style='width:200px;'>";
    while($row=$r_set->fetch_assoc()) {
        echo "<option value=$row[ID]> ($row[ID]) $row[Fornavn] </option>";
    }
    echo "</select>";
} else {
    echo $conn->error;
} */

echo"<select name=members class='form-control' style='width:200px;'>";

$sql = mysqli_query($conn, "SELECT ID, Fornavn FROM medlemmer");
$row = mysqli_num_rows($sql);

while($row = mysqli_fetch_array($sql)){
    $id = $row['ID'];
    $fnavn = $row['Fornavn'];
    echo "<option value=$id> $id $fnavn </option>";
}
echo "</select>";

//Hente ID som blir valgt fra dropdown
//ID som blir valgt i dropdown skal bli satt som variabel
//Må kanskje ha submit knapp 
//1: Velg et medlem
//2: Hvis submit knapp trykket
//3: Medlemmet som er valgt blir puttet i en variabel
//4: Variabel blir sendt til SQL query
//ID variabel skal bli satt inn i SQL query
//Formet vil da automatisk oppdatere seg med informasjon fra databasen etter hvilken ID som er valgt

$result = mysqli_query($conn, "SELECT * FROM Medlemmer WHERE ID = $id");

    while($res = mysqli_fetch_array($result))
{
    $medlemID = $res['ID'];
	$fornavn = $res['Fornavn'];
	$etternavn = $res['Etternavn'];
    $epost = $res['Epost'];
	$tlfnummer = $res['Mobilnummer'];
	$adresse = $res['Adresse'];
    $kjonn = $res['Kjønn'];
	$DOB = $res['Fødselsdato'];
	$kontigentstatus = $res['Kontigentstatus'];
}



/*
if(isset($_POST["update"])) {
    $id = $_POST['id'];
    

    $query = "UPDATE medlemmer SET Fornavn='$_POST[fornavn]', Etternavn='$_POST[etternavn]', Epost='$_POST[epost]' WHERE id= $id"; 
    $queryRun = mysqli_query($conn, $query);

    if($queryRun) {
        echo '<script type="text/javascript"> alert("Data updated")</script>';
    } else {
        echo '<script type="text/javascript"> alert("Data not updated")</script>';
    }
} */

//$id = $_GET['medlemID'];



?>