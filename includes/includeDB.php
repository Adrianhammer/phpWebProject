<?php  
    $servernavn = "localhost";
    $brukernavn = "root";
    $passord = "12345678"; //Ja, jeg vet. Ikke verdens beste passord.
    $database = "test1";

   //Lager connection til DB:
   $conn = mysqli_connect($servernavn, $brukernavn, $passord, $database);

   // Sjekker connection:
   if (!$conn) {
       die("Tilkobling misslykket: " . mysqli_connect_error());
   }
?>