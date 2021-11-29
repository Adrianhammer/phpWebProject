<?php
include ("../../includes/session.php");
include ("../controllers/registrereMedlemControllers.php");

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Registrere medlem</title>
  <meta name="Medlems registrering" content="Medlems registrering">
  <h1>Registrer nytt medlem</h1>
</head>

<pre>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<h2>Kontaktinformasjon:</h2>  
  Fornavn: <input type="text" name="navn" placeholder="Fornavn" required><br>   
  Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
  E-post: <input type="email" name="epost" placeholder="email@hotmail.com" required><br>
  Passord: <input type="password" name="passord" placeholder="Passord" required><br> 
  Telefon: <input type="tel" name="tlf" placeholder="98156123" required><br>
  Adresse: <input type="text" name="adresse" placeholder="Lolipoppveien 45" required><br>
  <h2>Annen informasjon:</h2>
  Kjønn: <input type="radio" name="kjønn" id="male" value="Mann" required> <label for="mann">Mann</label> 
         <input type="radio" name="kjønn" id="female" value="Kvinne" > <label for="kvinne">Kvinne</label><br>
  Fødselsdato: <input type="date" name="fdato" value="2011-05-05" required>
  <br>
  <h2>Medlemsinformasjon:</h2>
  Interesser: <input type="radio" id="trening" name="interesser" value="Trening" required> <label for="trening">Trening </label>
              <input type="radio" id="musikk" name="interesser" value="Musikk" > <label for="musikk">Musikk</label>
              <input type="radio" id="gaming" name="interesser" value="Gaming" > <label for="gaming">Gaming</label>
              <input type="radio" id="løping" name="interesser" value="Løping" > <label for="løping">Løping</label><br>
  Kursaktiviteter: 
              <input type="radio" id="maling" name="kursaktiviteter" value="Maling" required> <label for="maling">Maling</label>
              <input type="radio" id="seiling" name="kursaktiviteter" value="Seiling" > <label for="seiling">Seiling</label>
              <input type="radio" id="klatring" name="kursaktiviteter" value="Klatring" > <label for="klatring">Klatring</label>
              <input type="radio" id="programmering" name="kursaktiviteter" value="Programmering" > <label for="programmering">Programmering</label><br>
  Kontigentstatus: 
              <input type="radio" name="kontigent" id="betalt" value="Betalt" required> <label for="betalt">Betalt</label> 
              <input type="radio" name="kontigent" id="ikke betalt" value="Ikke betalt" > <label for="ikke betalt">Ikke betalt</label><br>

  <input type="submit" name='registrer' value="Registrér">
  
  
</form>
<a href="../views/testhjemmeside.php"><button>Tilbake til hjemmeside</button></a>
</pre>


<body>

<table border="1" cellpadding="5" align="center" style="text-align:center">
<tr>
    <th>Fornavn</th>
    <th>Etternavn</th>
    <th>Epost</th>
    <th>Mobilnummer</th>
    <th>Adresse</th>
    <th>Kjønn</th>
    <th>Fødseldato</th>
    <th>Interesser</th>
    <th>Kursaktiviteter</th>
    <th>Kontigentstatus</th>
</tr> 

    
</body>
</html>