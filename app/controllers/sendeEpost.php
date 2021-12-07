<?php 
include "../../includes/session.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../conf/vendor/autoload.php';
require_once "../../conf/vendor/phpmailer/phpmailer/src/SMTP.php";


$mail = new PHPMailer(true);

if(isset($_REQUEST['send-epost'])) {
$navn = $_REQUEST['navn'];
$enavn = $_REQUEST['enavn'];

//$kode = "abc"; // Spiller ingen rolle.
$epost = $_REQUEST['epost']; //Din epost.


  
try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'aamedlemsklubb@gmail.com'; //Din epost                 
    $mail->Password   = 'Petrus123'; // Ditt passord           
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;

    // Hvis noe går galt, kommenter ut SMTPDebug og do_debug. Så får du debug output. 
    $mail->SMTPDebug = false;
    $mail->do_debug = 0; 
    
    $mail->setFrom('aamedlemsklubb@gmail.com', 'Petrus');           
    $mail->addAddress($epost);

    $mail->addEmbeddedImage('../../assets/img/unique-fox-logo-simple-memorable-260nw-764798020.webp', 'logo');

        /* Meldingstekst for HTML-mottakere */
    $mld  = "Hei $navn $enavn,<br>";
    $mld .= $_REQUEST['message'];


    /* Meldingstekst for de som ikke kan motta HTML-epost */
    $amld  = "Hei " . $navn . ". <br><br>";
    $amld .= "Takk for at du registrerer deg hos oss. \n\n";
    $amld .= "Vennligst klikk nedenfor for å sette opp kontoen din: \n";
    $amld .= "Hvis dette ikke var deg, kan du trygt ignorere denne e-posten. \n\n";

    $footer = "<br><br>Regards<br/><br/>";
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
    $mail->FromName = "No-Reply";
    $mail->addAddress($epost, $navn . " " . $enavn);
    $mail->Subject = "Test Subject";
    $mail->Body = $mld . $footer . "<img src=\"cid:logo\" /><br>";
    $mail->AltBody = $amld . $footer;
    $mail->send();
    echo "<br>E-post er sendt";
    } catch(Exception $e) {
    echo "Noe gikk galt: " . $e->getMessage();
    }
}
?>


