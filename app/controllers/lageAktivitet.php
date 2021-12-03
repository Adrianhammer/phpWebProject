<html>
<head>
<title>OPTION</title>
</head>
<body>
    <form action="lageAktivitet.php" method="get">
        Aktivitet: 
        <br><select name="aktivitet">
            <option value="select">--Velg Aktivitet--</option>
            <option value="Fotball">Fotball</option>
            <option value="Basketball">Basketball</option>
            <option value="Gaming">Gaming</option>
            <option value="Maling">Maling</option>
        </select><br>

        Ansvarlig: 
        <br><select name="ansvarlig">
            <option value="select">--Velg Ansvarlig--</option>
            <option value="Ola Nordmann">Ola Nordmann</option>
            <option value="Største Sjefen">Største Sjefen</option>
            <option value="James Bond">James Bond</option>
            <option value="Harry Potter">Harry Potter</option>
        </select><br>

        Fra: 
        <br><select name="timeFrom">
        <option value="select">--Velg Tid--</option>
        <?php 
        for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
        for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
            echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                           .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
        
        ?>    
        </select><br>

        Til: 
        <br><select name="timeTo">
        <option value="select">--Velg Tid--</option>
        <?php 
        for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
        for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'
            echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                           .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
        ?>    
        </select><br>

        Dato: 
        <br><input type="date" name="fromDate" value=" " required><br> 
        
        <br><input type="submit" name="submit" value="Insert">
    </form>
</body>
</html>

<?php

include "../../includes/includeDB.php";
include "../../includes/session.php";


if(isset($_REQUEST['submit'])) {
    
    // Lage variabler
    $aktivitet =  $_REQUEST['aktivitet'];
    $ansvarlig =  $_REQUEST['ansvarlig'];
    $timeFrom  =  $_REQUEST['timeFrom'];
    $timeTo    =  $_REQUEST['timeTo'];
    $fromDate  =  $_REQUEST['fromDate'];

    $sql = "INSERT INTO aktiviteter (Aktivitet, Ansvarlig, Starttid, Slutttid, Dato) 
    VALUES ('$aktivitet', '$ansvarlig', '$timeFrom', '$timeTo', '$fromDate')";
 
    $query = mysqli_query($conn, $sql);

    // Henter inn kun medlemmet hvor Navn og Etternavn er det samme som variabel inputten.
    $sql = "SELECT * FROM aktiviteter"; 

    // Setter sammen spørringen til tilkoblingen
    $stmt = $conn->prepare( $sql );

    // Binder variablene sammen med SQL statementen.
    // mysqli_stmt_bind_param($stmt, "ss", $fnavn, $enavn);

    // Utfører spørring
    $stmt->execute();

    // Henter resultat
    $resultat = $stmt->get_result();

    ?>

<table border="1" cellpadding="5" align="center" style="text-align:center">
    
    <tr>
        <th>AktivitetID</th>
        <th>Aktivitet</th>
        <th>Ansvarlig</th>
        <th>Fra</th>
        <th>Til</th>
        <th>Dato</th>
    </tr>
    
    
    <?php


// Setter opp en foreach lække som går gjennom hvert element i listen og printer ut med print_r
// Bekreftelsen på registrering til bruker
if ($resultat) {
    echo "Følgende aktvititet er registrert:<br>";
    echo "<br>";
    echo "<br><strong>Inormasjon registrert:</strong><br>";
    
    // Henter en rad om gangen fra databasen (dvs. ett og ett medlem)
    while( $row = $resultat->fetch_assoc() ) 
    { // Opening while
        ?>
    
    <tr>
        <td><?php echo $row['AktivitetID']; ?></td>
        <td><?php echo $row['Aktivitet']; ?></td>
        <td><?php echo $row['Ansvarlig']; ?></td>
        <td><?php echo $row['Starttid']; ?></td>
        <td><?php echo $row['Slutttid']; ?></td>
        <td><?php echo $row['Dato']; ?></td>
    </tr>
    
    <?php
    
} // Closing while

// Avslutter spørring 
$stmt->close();
?>
</table>

<?php 
// Avslutter databasetilkobling
$conn->close();
    }
}
?>