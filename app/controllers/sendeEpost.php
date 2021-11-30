<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Oppgave 1</title>
  <meta name="description" content="Oppgave 1">
  <h1>Oppgave 1</h1>
</head>
<body>

</body>

<?php
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include "../../includes/session.php";
  
require '../../conf/vendor/autoload.php';
require_once "../../conf/vendor/phpmailer/phpmailer/src/SMTP.php";

  
$mail = new PHPMailer(true);

$fnavn = "$_SESSION[Fornavn]";
$enavn = "$_SESSION[Etternavn]"; 
//$kode = "abc"; // Spiller ingen rolle.
$epost = "darkmaninside@hotmail.no"; //Din epost.


  
try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'aamedlemsklubb@gmail.com'; //Din epost                 
    $mail->Password   = 'Petrus123'; // Ditt passord           
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('aamedlemsklubb@gmail.com', 'Petrus');           
    $mail->addAddress('darkmaninside@hotmail.no');

    $mail->addEmbeddedImage('../../assets/img/unique-fox-logo-simple-memorable-260nw-764798020.webp', 'logo');

        /* Meldingstekst for HTML-mottakere */
    $mld  = "Kjære " . $fnavn . ". <br><br>";
    $mld .= "Takk for at du registrerer deg hos oss. <br><br>";
    $mld .= "Vennligst klikk nedenfor for å sette opp kontoen din: <br>";
    $mld .= '<a href="http://localhost/bekreftelse.php?k=' . $kode . '">Bekreft din registrering</a> <br><br>';
    $mld .= "Hvis dette ikke var deg, kan du trygt ignorere denne e-posten. <br><br>";
    $mld .= "<br><br>Denne eposten er sendt fra 'Organisasjon'.no. For mer informasjon trykk <a href='https://youtu.be/dQw4w9WgXcQ?t=1/'>her</a><br><br>";

    /* Meldingstekst for de som ikke kan motta HTML-epost */
    $amld  = "Kjære " . $fnavn . ". <br><br>";
    $amld .= "Takk for at du registrerer deg hos oss. \n\n";
    $amld .= "Vennligst klikk nedenfor for å sette opp kontoen din: \n";
    $amld .= "http://localhost/bekreftelse.php?k=" . $kode . " \n\n";
    $amld .= "Hvis dette ikke var deg, kan du trygt ignorere denne e-posten. \n\n";

    $footer = "Regards<br/><br/>";
        $footer .= '<table style="width: 95%">';
        $footer .= '<tr>';
        $footer .= '<td>';
        $footer .= "<strong><span style='font-size: 15px'>Adel Hodz Inc</span></strong><br/>
                        Adel Hodzalari<br/>
                        Telefonnummer: 12345678 <br/>
                        E-post: Organisasjon@gmail.com <br/>
                        Nettside: https//:organsiasjon.no<br/>";
        $footer .= '</td>';
        $footer .= '<td style="text-align:right">';
        $footer .= '</td>';
        $footer .= '</tr>';
        $footer .= '</table>';
    

    $mail->isHTML(true);
    $mail->FromName = "Ikke svar";
    $mail->addAddress($epost, $fnavn . " " . $enavn);
    $mail->Subject = "Registrering: kun ett steg unna nå!";
    $mail->Body = $mld . $footer . "<img src=\"cid:logo\" /><br>";
    $mail->AltBody = $amld . $footer;
    $mail->send();
    echo "E-post er sendt";
    } catch(Exception $e) {
    echo "Noe gikk galt: " . $e->getMessage();
    }
?>
</html>