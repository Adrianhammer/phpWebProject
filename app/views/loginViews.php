<?php 
include ("../controllers/login.php"); 
include ("../../includes/Footer.php");
include ("../../includes/Footer.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 300px solid #ffff;}

input[type=text], input[type=password] {
  width: 300px;
  padding: 12px 20px;
  margin: 8px 10;
  display: block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 80;
  border: none;
  cursor: pointer;
  width: 150px;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }

}
</style>
</head>
<body>



<form action="../controllers/login.php" method="post">
  <div class="container">
  <h2>Login</h2>
    <label for="bnavn"><b>Brukernavn</b></label>
    <input type="text" placeholder="Skriv inn brukernavn" name="bnavn" required>
      <br/>
    <label for="pord"><b>Passord</b></label>
    <input type="password" placeholder="Skriv inn passord" name="pord" required>
      <br/>
    <button type="submit" name="logginn">Login</button>

  </div>
</form>

</body>
</html>
