<?php
include ("../../includes/session.php");
include ("../controllers/endreMedlemsInfoController.php");

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

<form action="" method="POST">
    ID: <input type="text" name="id" placeholder="Skriv inn ID"><br>
    <br>
    Fornavn: <input type="text" name="fornavn" placeholder="Endre fornavn"><br>
    <br>
    Etternavn: <input type="text" name="etternavn" placeholder="Endre Etternavn"><br>
    <br>
    Epost: <input type="text" name="epost" placeholder="Endre Epost"><br>

    <br><input type="submit" name="update" value="Endre">
</form>



<form name="form" method="POST" action="">
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
				
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>

<a href="../views/testhjemmeside.php"><button>Tilbake til hjemmeside</button></a>

</form>
</pre>
</body>
</html>
