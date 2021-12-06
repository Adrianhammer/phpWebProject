<?php
    include_once ("../../includes/session.php");
    include ("../../includes/navbar.php");


    echo "<h2>Velkommen til medlemssystemets hjemmeside</h2><br><br>";
 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hjem</title>
</head>
<body>

<form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="request">
<input type="submit" name="loggut" value="Logg Ut">

</form>
</body>
</html>

