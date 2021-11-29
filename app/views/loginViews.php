<?php include ("../controllers/login.php"); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Medlemssystem - Login</title>
  <meta name="Login Page" content="Login">
  <h1>Loginn</h1>
</head>
<body>

<form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="container">
        <label for="bnavn"><b>Brukernavn</b></label>
        <input type="text" placeholder="Skriv inn brukernavn" name="bnavn" required>

        <label for="pord"><b>Passord</b></label>
        <input type="password" placeholder="Skriv inn passord" name="pord" required>

        <input type="submit" name="logginn" value="Logg inn">
    </div>
</form>

</body>
</html>