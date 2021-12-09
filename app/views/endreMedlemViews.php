<?php 
include("../../includes/navbar.php"); 
include ("../../includes/Footer.php");
include ("../../includes/session.php");

?>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endre medlem</title>     
</head>
<body>

<h3>Her har du oversikt over alle medlemmene:</h3>
<h4>Velg mellom hvilke medlemmer du ønsker å endre.</h4> 

<table border="1" cellpadding="5" align="center" style="text-align:center">
        <tr>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Brukernavn</th>
            <th>Epost</th>
            <th>Mobilnummer</th>
            <th>Adresse</th>
            <th>Postnummer</th>
            <th>Poststed</th>
            <th>Kjønn</th>
            <th>Fødselsdato</th>
            <th>Medlem siden</th>
            <th>Interesser</th>
            <th>Kursaktiviteter</th>
            <th>Rolle 1</th>
            <th>Rolle 2</th>
            <th>Kontigentstatus</th>
            <th>Endre</th>
            <th>Slett</th>
        </tr>

<?php 
include ("../controllers/endreMedlem.php"); 
?>

    
</body>
</html>