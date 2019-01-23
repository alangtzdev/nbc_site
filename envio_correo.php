<?php
 /*   ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "carlos.espinosa@sitilab.com";
    //$to = "carlos.espinosa@sitilab.com";
    $to = "isc.alan.gtz@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    $bool = mail($to,$subject,$message, $headers);
    if($bool){
    	echo "Mensaje enviado";
	}else{
	    echo "Mensaje no enviado";
	}
    echo "\n";*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
/*$mail = new PHPMailer();

$body = 'An email test!';

$mail->AddReplyTo('carlos@sitilab.com', 'Carlangas');
$mail->SetFrom('carlos@sitilab.com', 'Carlangas');
$mail->AddAddress('carlos@sitilab.com', 'Code Chewing Guides');
$mail->Subject = 'Test email';
$mail->MsgHTML( $body );

if( ! $mail->Send() ) {
  echo "Mailer Error: " . $mail->ErrorInfo;
}*/

$mail = new PHPMailer();                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'weedkfc@gmail.com';                 // SMTP username
    $mail->Password = 'amateur0716';                           // SMTP password
    //$mail->SMTPSecure = 'tls';
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('isc.alan.gtz@gmail.com', 'Mailer');    // Add a recipient
    $mail->addAddress('isc.alan.gtz@gmail.com');  

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
echo "\n";
?>