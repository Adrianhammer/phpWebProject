<?php

$records = mysqli_query($conn, "SELECT * FROM medlemmer WHERE Brukernavn = '$_SESSION[Brukernavn]'");

?>