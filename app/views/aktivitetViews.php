<?php
include ("../../includes/navbar.php");
include ("../controllers/lageAktivitet.php");
include ("../../includes/Footer.php");


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktiviteter</title>
</head>
<body>
    
    <form action="lageAktivitet.php" method="get">
        Aktivitet: 
        <br><select name="aktivitet">
            <option value="select" disable selected>--Velg Aktivitet--</option>
            <option value="Fotball">Fotball</option required>
            <option value="Basketball">Basketball</option required>
            <option value="Gaming">Gaming</option required>
            <option value="Maling">Maling</option required>
        </select><br>

        Ansvarlig: 
        <br><select name="ansvarlig">
            <option value="select" disable selected>--Velg Ansvarlig--</option>
            <option value="Ola Nordmann">Ola Nordmann</option required>
            <option value="Største Sjefen">Største Sjefen</option required>
            <option value="James Bond">James Bond</option required>
            <option value="Harry Potter">Harry Potter</option required>
        </select><br>

        Fra: 
        <br><select name="timeFrom">
        <option value="select" disable selected>--Velg Tid--</option>
        <?php 
        for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
        for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
            echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                           .str_pad($mins,2,'0',STR_PAD_LEFT).'</option required>';
        
        ?>    
        </select><br>

        Til: 
        <br><select name="timeTo">
        <option value="select" disable selected>--Velg Tid--</option>
        <?php 
        for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
        for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
            echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                           .str_pad($mins,2,'0',STR_PAD_LEFT).'</option required>';
        ?>    
        </select><br>

        Dato: 
        <br><input type="date" name="fromDate" value=" " required><br> 
        
        <br><input type="submit" name="submit" value="Insert">
    </form>
</body>
</html>
