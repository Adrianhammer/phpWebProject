<?php
include ("../../includes/includeDB.php");

$id = $_GET['id']; 


$query = "DELETE FROM medlemmer WHERE ID = $id";

$stmt = $conn->prepare($query);

$stmt->execute();



if($stmt) {
    echo '<script type="text/javascript"> alert("Medlem slettet")</script>';
    
} else {
    echo '<script type="text/javascript"> alert("Medlem ble ikke slettet")</script>';
}

header("Location: ../views/endreMedlemViews.php");


?>


<a href="../views/endreMedlemViews.php">Gå tilbake</a>
