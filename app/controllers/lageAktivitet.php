<?php
include "../../includes/includeDB.php";

if(isset($_REQUEST['submit'])) {
    
    // Lage variabler
    $aktivitet =  $_REQUEST['aktivitet'];
    $ansvarlig =  $_REQUEST['ansvarlig'];
    $timeFrom  =  $_REQUEST['timeFrom'];
    $timeTo    =  $_REQUEST['timeTo'];
    $fromDate  =  $_REQUEST['fromDate'];

    include ("../models/aktivitetModels.php");

}

header("Location: ../views/aktivitetViews.php");


?>



