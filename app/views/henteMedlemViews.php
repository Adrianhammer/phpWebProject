<?php
include ("../../includes/navbar.php");
include ("../../includes/Footer.php");
include ("../../includes/session.php");


?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Se Medlemmer</title>
  <meta name="Henter Medlemer fra Databasen" content="Medlem fra Database">

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h3>Hent medlemmer:</h3>
        <h4>Velg mellom hvilke dato du ønsker å hente medlemmer.</h4>  
        Fra dato:      
        <br><input type="date" name="fromDate" value="1900-01-01" required><br>   
        Til dato:    
        <br><input type="date" name="toDate" value="<?php echo date('Y-m-d'); ?>" required><br> 
        <br><input type="submit" name='hent-medlem' value="Hent Medlem">
</form>

</head>
<body>


<?php

include ("../controllers/henteMedlem.php");

?>