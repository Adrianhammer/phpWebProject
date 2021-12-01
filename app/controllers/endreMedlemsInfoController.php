<?php
include_once ("../../includes/includeDB.php");
include ("../models/endreMedlemsInfoModels.php");


echo "<br>Velg medlem</br>";

if ($r_set=$conn->query($result)) {
    echo"<select name=members class='form-control' style='width:200px;'>";

    while($row=$r_set->fetch_assoc()) {
        
        echo "<option value=$row[ID]> ($row[ID]) $row[Fornavn] </option>";
    
    }

    echo "</select>";

} else {
    echo $conn->error;
}



$result = mysqli_query($conn, "SELECT * FROM Medlemmer WHERE ID = 1");

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