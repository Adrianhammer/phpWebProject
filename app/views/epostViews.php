<?php 
include ("../controllers/sendeEpost.php");
include ("../../includes/navbar.php");
include ("../../includes/Footer.php");

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
  <br><input type="text" name="navn" placeholder="Fornavn" required><br>   
  Etternavn:    
  <br><input type="text" name="enavn" placeholder="Etternavn" required><br>
  E-post:       
  <br><input type="email" name="epost" placeholder="email@hotmail.com" required><br>
  Melding:      
  <br><textarea id="emailMessage" name="message" rows="5" cols="50"></textarea required><br> 

  <br><input type="submit" name='send-epost' value="Send epost">
  
  
</form>

</body>
</html>