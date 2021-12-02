<?php
include ("../../includes/includeDB.php");
include ("../../includes/session.php");
include ("../models/endreMedlemModels.php");


    $id = $_GET['id']; 

    $result = mysqli_query($conn, "SELECT * FROM medlemmer WHERE ID = $id");

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

   


 if(isset($_POST["update"])) {
    $query = "UPDATE medlemmer SET Fornavn='$_POST[fornavn]', Etternavn='$_POST[etternavn]', Epost='$_POST[epost]', Mobilnummer='$_POST[tlfnummer]', Adresse='$_POST[adresse]', Kjønn='$_POST[kjønn]', Fødselsdato='$_POST[DOB]', Kontigentstatus='$_POST[kontingentstatus]' WHERE ID= 7"; 

    $queryRun = mysqli_query($conn, $query);

    if($queryRun) {
        echo '<script type="text/javascript"> alert("Data updated")</script>';
    } else {
        echo '<script type="text/javascript"> alert("Data not updated")</script>';
    }
}

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Endre Medlemsinformasjon</title>
  <meta name="Endre medlemsinformasjon" content="Endre medlemsinformasjon">
  <h1>Endre medlemsinformasjon</h1>
</head>

<body>
<pre>

<form name="form" method="POST" action="endreMedlemForm.php">
		<table border="0">
            <tr>
				<td>MedlemID</td>
				<td><input type="hidden" name="medlemID" value="<?php echo $medlemID;?>"></td>
			</tr>
			<tr>
				<td>Fornavn</td>
				<td><input type="text" name="fornavn" value="<?php echo $fornavn;?>"></td>
			</tr>
			<tr>
				<td>Etternavn</td>
				<td><input type="text" name="etternavn" value="<?php echo $etternavn;?>"></td>
			</tr>
            <tr>
				<td>Epost</td>
				<td><input type="text" name="epost" value="<?php echo $epost;?>"></td>
			</tr>
            <tr>
				<td>Telefonnummer</td>
				<td><input type="tel" name="tlfnummer" value="<?php echo $tlfnummer;?>"></td>
			</tr>
            <tr>
				<td>adresse</td>
				<td><input type="text" name="adresse" value="<?php echo $adresse;?>"></td>
			</tr>
            <tr>
				<td>Kjønn</td>
				<td><input type="text" name="kjønn" value="<?php echo $kjonn;?>"></td>
			</tr>
            <tr>
				<td>Fødselsdato</td>
				<td><input type="text" name="DOB" value="<?php echo $DOB;?>"></td>
			</tr>
            <tr>
				<td>Kontigentstatus</td>
				<td><input type="text" name="kontingentstatus" value="<?php echo $kontigentstatus;?>"></td>
			</tr>
			<tr>
				
				<td><input type="submit" name="update" value="Endre"></td>
			</tr>
		</table>
	</form>

<a href="../views/testhjemmeside.php"><button>Tilbake til hjemmeside</button></a>

</form>
</pre>
</body>
</html>
