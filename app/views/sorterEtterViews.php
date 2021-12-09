<?php
include("../../includes/navbar.php");
include ("../../includes/session.php");
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sorter Etter</title>
  <h1>Her kan du sortere etter felt.</h1>
</head>
<body>
<form method="post" action="#">
    <label for="felt">Hvilket felt vil du sortere etter?:</label><br>
    <input type="text" id="felt" name="felt" required><br><br>

    <label for="felt2">Hva skal feltet være?:</label><br>
    <input type="text" id="felt2" name="felt2" required><br><br>
    
    
    <input type="submit" name="Søk" value="Søk">
</form>

<?php

include("../controllers/sorterEtter.php");

?>

</body>
</html>