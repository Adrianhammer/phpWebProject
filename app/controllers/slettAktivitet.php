<?php
include ("../../includes/includeDB.php");

$id = $_GET['AktivitetID']; 


$query = "DELETE FROM aktiviteter WHERE AktivitetID = $id";

$stmt = $conn->prepare($query);

$stmt->execute();


if($stmt) {
    echo '<script type="text/javascript"> alert("Aktivitet slettet")</script>';
    
} else {
    echo '<script type="text/javascript"> alert("Aktivitet ble ikke slettet")</script>';
}

header("Location: ../views/aktivitetViews.php");

?>


