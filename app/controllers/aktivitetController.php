<?php

$query = "SELECT * FROM aktiviteter order by AktivitetID";

// Setter sammen spørringen til tilkoblingen
$statement = $conn->prepare($query);

// Utfører spørring
$statement->execute();

// Henter resultat
$result = $statement->get_result();


    if ($result) {        
        while( $row = $result->fetch_assoc() ) 
        {
            ?>
        
    <tr>
        <td><?php echo $row['AktivitetID']; ?></td>
        <td><?php echo $row['Aktivitet']; ?></td>
        <td><?php echo $row['Ansvarlig']; ?></td>
        <td><?php echo $row['Starttid']; ?></td>
        <td><?php echo $row['Slutttid']; ?></td>
        <td><?php echo $row['Dato']; ?></td>
        <td><a href="../controllers/slettAktivitet.php? AktivitetID=<?php echo $row['AktivitetID']?>;">Slett aktivitet</a></td>
    </tr>
<?php
        }
    }

        $statement->close();
    ?>
    </table>
    <?php 
        $conn->close();
?>