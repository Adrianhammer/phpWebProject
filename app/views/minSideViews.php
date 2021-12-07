<?php
include_once ("../../includes/session.php");
include ("../../includes/navbar.php");
include ("../../includes/includeDB.php");
require_once ("../models/minSideModels.php");
include ("../../includes/Footer.php");

?>

<!DOCTYPE html>
<html>
    <title>Min side</title>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover {
  opacity: 0.7;
}

</style>
</head>
<body>

<?php



while($data = mysqli_fetch_array($records)) {
    ?>

<br /><br /><br />

<div class="card">
  <img src="/assets/img/team2.jpg" alt="Profil bilde" style="width:100%">
  <h1><?php echo $_SESSION["Fornavn"], " ", $_SESSION["Etternavn"]?></h1>
  <p class="title">Bruker ID:<?php echo $data["ID"]; ?></p>
  <p class="title">Epost: <?php echo $data["Epost"]; ?></p>
  <p class="title">Mobilnummer: <?php echo $data["Mobilnummer"]; ?></p>
  <p class="title">Land: <?php echo $data["Adresse"]; ?></p>
  <p class="title">Fødselsdato: <?php echo $data["Fødselsdato"]; ?></p>

  <p><button>Endre info</button></p>
</div>
<?php
}
?>




</body>
</html>


