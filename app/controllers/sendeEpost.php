<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../conf/vendor/autoload.php';
require_once "../../conf/vendor/phpmailer/phpmailer/src/SMTP.php";
include ("../../includes/includeDB.php");


$mail = new PHPMailer(true);

if(isset($_REQUEST['send-epost'])) {
$navn = $_REQUEST['navn'];
$enavn = $_REQUEST['enavn'];

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
    $amld .= "Takk for at du ble medlem hos oss. \n\n";
    $amld .= "Vennligst klikk nedenfor for å sette opp kontoen din: \n";
    $amld .= "Hvis dette ikke var deg, kan du trygt ignorere denne e-posten. \n\n";

    $footer = "<br><br>Regards<br/><br/>";
        $footer .= '<table style="width: 95%">';
        $footer .= '<tr>';
        $footer .= '<td>';
        $footer .= "<strong><span style='font-size: 15px'>Prosjektgruppe 27</span></strong><br/>
                        Adel Hodzalari & Adrian Hammer<br/>
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
    echo '<br /><script type="text/javascript"> alert("Epost sendt")</script>';
    } catch(Exception $e) {
    echo "Noe gikk galt: " . $e->getMessage();
    }
}

if(isset($_REQUEST['send-ikkebetalt'])) {

    $ikkeBetalt = $_REQUEST['send-ikkebetalt'];

    $query = mysqli_query($conn, "SELECT Epost FROM medlemmer WHERE Kontigentstatus = '$ikkeBetalt' ");
            
        if($query->num_rows == 0) {
            echo "Det finnes ingen medlemmer ";
       } 

       $mail = new PHPMailer(true);
       while($row = mysqli_fetch_array($query))
       {
           $email = $row['Epost'];
       
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

            /* Meldingstekst for HTML-mottakere */
                
            $mld  = "Kjære bruker<br><br>";
            $mld .= "Dette er en test<br><br>";
    
            $footer = "Regards<br/><br/>";
            $footer .= '<table style="width: 95%">';
            $footer .= '<tr>';
            $footer .= '<td>';
            $footer .= "<strong><span style='font-size: 15px'>NamDimes Team</span></strong><br/>
                            NamDimes<br/>
                            Contact Number: 12345678 <br/>
                            Email: Organisasjon@gmail.com <br/>
                            Website: https//:organsiasjon.no<br/>";
            $footer .= '</td>';
            $footer .= '<td style="text-align:right">';
            $footer .= '</td>';
            $footer .= '</tr>';
            $footer .= '</table>';
    
            /* Meldingstekst for de som ikke kan motta HTML-epost */
            $amld  = "Kjære bruker <br><br>";
            $amld .= "Du har ikke betalt kontigenten din for denne måneden<br><br>";
            
                
            $mail->isHTML(true);
            $mail->FromName = "Ikke svar";
            $mail->addAddress($email);
            $mail->Subject = "Registrering: kun ett steg unna nå!";
            $mail->Body = "<img src=\"cid:logo\" /><br>" . $mld . $footer;
            $mail->AltBody = $amld;
            } catch(Exception $e) {
            echo "Noe gikk galt: " . $e->getMessage();
            }
        }
        $mail->send();
        
        if($mail) {
            echo '<script type="text/javascript"> alert("Epost sendt til de som ikke har betalt")</script>';
        } else { 
            echo '<script type="text/javascript"> alert("Epost ble ikke sendt")</script>';
        }
    }

?>


