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
?>