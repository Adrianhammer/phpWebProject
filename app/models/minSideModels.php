<?php

$records = mysqli_query($conn, "SELECT * FROM medlemmer WHERE Fornavn = '$_SESSION[Fornavn]'");

?>