<?php 
include ("../../includes/session.php");
include_once ("../../includes/includeDB.php");
include ("../models/endreMedlemModels.php");


while( $row = $resultat->fetch_assoc() ) 
    { 

?>
    <tr>
        <td><?php echo $row['Fornavn']; ?></td>
        <td><?php echo $row['Etternavn']; ?></td>
        <td><?php echo $row['Brukernavn']; ?></td>
        <td><a href="../views/epostViews.php? id=<?php echo $row['ID']?>"><?php echo $row['Epost']; ?></a></td>
        <td><?php echo $row['Mobilnummer']; ?></td>
        <td><?php echo $row['Adresse']; ?></td>
        <td><?php echo $row['Postnummer']; ?></td>
        <td><?php echo $row['Poststed']; ?></td>
        <td><?php echo $row['Kjønn']; ?></td>
        <td><?php echo $row['Fødselsdato']; ?></td>
        <td><?php echo $row['MedlemSiden']; ?></td>
        <td><?php echo $row['Interesser']; ?></td>
        <td><?php echo $row['Kursaktiviteter']; ?></td>
        <td><?php echo $row['Rolle1']; ?></td>
        <td><?php echo $row['Rolle2']; ?></td>
        <td><?php echo $row['Kontigentstatus']; ?></td>
        <td><a href="../views/endreMedlemFormV.php? id=<?php echo $row['ID']?>;">Endre</a></td>
        <td><a href="../controllers/slettMedlem.php? id=<?php echo $row['ID']?>;">Slett</a></td>
    </tr>

    <?php
        } 
        $stmt->close();
    ?>
    </table>
    
    <?php 
        $conn->close();

?>