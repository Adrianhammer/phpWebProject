<?php
include_once ("../../includes/session.php");
include ("../../includes/navbar.php");
include ("../../includes/Footer.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hjem</title>
</head>
<body>
<h2>Velkommen til Neo ungdomsklubb!</h2><br><br> 
<img src="../../assets/img/logo.jpg" alt="homepage">





<form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="request">
<input type="submit" name="loggut" value="Logg Ut">
</form>




</body>


</html>

