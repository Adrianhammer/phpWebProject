<?php
include ("../../includes/includeDB.php");
$id = $_GET['id']; 


if(isset($_POST["update"])) {

 
    $id = mysqli_real_escape_string($conn, $_POST['medlemID']);
    $fornavn = mysqli_real_escape_string($conn, $_POST['fornavn']);
    $etternavn = mysqli_real_escape_string($conn, $_POST['etternavn']);
    $epost = mysqli_real_escape_string($conn, $_POST['epost']);
    $tlfnummer = mysqli_real_escape_string($conn, $_POST['tlfnummer']);
    $adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
    $kjønn = mysqli_real_escape_string($conn, $_POST['kjønn']);
    $fødselsdato = mysqli_real_escape_string($conn, $_POST['DOB']);
    $kontigentstatus = mysqli_real_escape_string($conn, $_POST['kontingentstatus']);


    $query = mysqli_query($conn, "UPDATE medlemmer SET Fornavn='$fornavn', Etternavn='$etternavn', Epost='$epost', Mobilnummer='$tlfnummer', Adresse='$adresse', Kjønn='$kjønn', Fødselsdato='$fødselsdato', Kontigentstatus='$kontigentstatus' WHERE ID= $id");


    header("Location: ../views/endreMedlemViews.php");

}

?>