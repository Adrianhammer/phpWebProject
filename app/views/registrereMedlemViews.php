<?php
include ("../../includes/session.php");
include ("../controllers/registrereMedlemControllers.php");
include ("../../includes/navbar.php");
include ("../../includes/Footer.php");



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
<body>
<pre>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<h2>Kontaktinformasjon:</h2>  
  Fornavn: <input type="text" name="navn" placeholder="Fornavn" required><br>   
  Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
  E-post: <input type="email" name="epost" placeholder="email@hotmail.com" required><br>
  Brukernavn: <input type="text" name="brukernavn" placeholder="brukernavn" required><br>
  Passord: <input type="password" name="passord" placeholder="Passord" required><br> 
  Telefon: <input type="tel" name="tlf" placeholder="98156123" required><br>
  Adresse: <input type="text" name="adresse" placeholder="Adresse" required><br>
  Postnummer: <input type="text" name="postnummer" placeholder="Postnummer" required><br>
  Poststed: <input type="text" name="poststed" placeholder="Poststed" required><br>
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
  Rolle1: 
              <input type="radio" name="rolle1" id="leder" value="Leder" required> <label for="leder">Leder</label> 
              <input type="radio" name="rolle1" id="nestleder" value="Nest Leder" > <label for="nestleder">Nest Leder</label><br>
  Rolle2: 
              <input type="radio" name="rolle2" id="kursansvarlig" value="Kursansvarlig" required> <label for="kursansvarlig">Kursansvarlig</label> 
              <input type="radio" name="rolle2" id="medlem" value="Medlem" > <label for="medlem">Medlem</label><br>
  Kontigentstatus: 
              <input type="radio" name="kontigent" id="betalt" value="Betalt" required> <label for="betalt">Betalt</label> 
              <input type="radio" name="kontigent" id="ikke betalt" value="Ikke betalt" > <label for="ikke betalt">Ikke betalt</label><br>

  <input type="submit" name='registrer' value="Registrér">
  
  
</form>
</pre>
</body>
</html>