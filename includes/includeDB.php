<?php  
    $servernavn = "localhost";
    $brukernavn = "root";
    $passord = "12345678"; //Ja, jeg vet. Ikke verdens beste passord.
    $passordAdrian = "123";
    $database = "test1";

   //Lager connection til DB:
   $conn = mysqli_connect($servernavn, $brukernavn, $passordAdrian, $database);

   // Sjekker connection:
   if (!$conn) {
       die("Tilkobling misslykket: " . mysqli_connect_error());
   }
?>