<?php


$sql = "SELECT * FROM medlemmer order by ID";


$stmt = $conn->prepare($sql);

$stmt->execute();

// Henter resultat
$resultat = $stmt->get_result();



?>