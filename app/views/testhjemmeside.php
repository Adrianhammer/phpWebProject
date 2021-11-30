<?php
    include_once ("../../includes/session.php");

    echo "<h2>Velkommen til medlemssystemets hjemmeside</h2><br><br>";
    echo "<a href='minSideViews.php'>Gå til Min Side<br><br></a>";
    echo "<a href='../views/registrereMedlemViews.php'>Trykk her for å registrere nytt medlem<br><br></a>";
    echo "<a href='../controllers/sendeEpost.php'>Trykk her for å sende epost<br><br></a>";
    echo "<a href='../controllers/henteMedlem.php'>Trykk her for å hente medlemmer<br><br></a>";

?>

<form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="request">
<input type="submit" name="loggut" value="Logg Ut">
</form>