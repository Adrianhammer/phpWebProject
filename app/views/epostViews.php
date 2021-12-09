<?php 
include ("../../includes/navbar.php");
include ("../../includes/Footer.php");
include ("../../includes/session.php");
include ("../../includes/includeDB.php");
include ("../controllers/sendeEpost.php");

$id = $_REQUEST['id'] ?? null; 

if (isset($id)) {

$result = mysqli_query($conn, "SELECT * FROM medlemmer WHERE ID = $id");

$res = mysqli_fetch_array($result);

     $medlemID = $res['ID'];
     $fornavn = $res['Fornavn'];
     $etternavn = $res['Etternavn'];
     $epost = $res['Epost'];
     
     ?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Send Epost</title>
</head>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<h3>Send Epost:</h3>  
  Fornavn:      
  <br><input type="text" name="navn" placeholder="Fornavn" value= "<?php echo $fornavn;?>" required><br>   
  Etternavn:    
  <br><input type="text" name="enavn" placeholder="Etternavn" value= "<?php echo $etternavn;?>" required><br>
  E-post:       
  <br><input type="email" name="epost" placeholder="email@hotmail.com" value= "<?php echo $epost;?>" required><br>
  Melding:      
  <br><textarea id="emailMessage" name="message" rows="5" cols="50"></textarea required><br> 

  <br><input type="submit" name='send-epost' value="Send epost">
  
</form>

<?php

} else {

  ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<h3>Send Epost:</h3>  
  Fornavn:      
  <br><input type="text" name="navn" placeholder="Fornavn"  required><br>   
  Etternavn:    
  <br><input type="text" name="enavn" placeholder="Etternavn"  required><br>
  E-post:       
  <br><input type="email" name="epost" placeholder="email@hotmail.com"  required><br>
  Melding:      
  <br><textarea id="emailMessage" name="message" rows="5" cols="50"></textarea required><br> 

  <br><input type="submit" name='send-epost' value="Send epost">
  
</form>

<br>
<?php 
} 
?>
<form method="post">

<?php

$sql = mysqli_query($conn, "SELECT * FROM medlemmer WHERE Kontigentstatus = 'Ikke betalt' ");

$rad = $sql->fetch_assoc()

  ?>
  
  <p>Send til de som ikke har betalt kontigentstatus:</p>
  <input type="submit" name="send-ikkebetalt" value="<?php echo $rad['Kontigentstatus'];?>">

</form>



</body>
</html>