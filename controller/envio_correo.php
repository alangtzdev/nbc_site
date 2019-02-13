<?php
$nombre = isset($_POST["fname"]) ? $_POST["fname"] : null; 
$email = isset($_POST["email"]) ? $_POST["email"] : null; 
$mensaje = isset($_POST["mensaje"]) ? $_POST["mensaje"] : null; 
$telefono =  isset($_POST["telefono"]) ? $_POST["telefono"] : null; 
var_dump($nombre,$email,$mensaje,$telefono);
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require '../PHPMailer/src/Exception.php';
// require '../PHPMailer/src/PHPMailer.php';
// require '../PHPMailer/src/SMTP.php';

// $mail = new PHPMailer();                              // Passing `true` enables exceptions
// try {
//     //Server settings
//     $mail->SMTPDebug = 1;                                 // Enable verbose debug output
//     $mail->isSMTP();                                      // Set mailer to use SMTP
//     $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//     $mail->SMTPAuth = true;                               // Enable SMTP authentication
//     $mail->Username = 'weedkfc@gmail.com';                 // SMTP username
//     $mail->Password = '';                           // SMTP password
//     //$mail->SMTPSecure = 'tls';
//     $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//     $mail->Port = 465;                                    // TCP port to connect to

//     //Recipients
//     $mail->setFrom('isc.alan.gtz@gmail.com', 'Mailer');    // Add a recipient
//     $mail->addAddress('isc.alan.gtz@gmail.com');  

//     //Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Here is the subject' . $nombre;
//     $mail->Body    = 'Hola estamos probando por segunda vez el envio'. $email .'de correos por gmail' . $telefono;
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     if(!$mail->Send()) {
//         echo "Mailer Error: " . $mail->ErrorInfo;
//      } else {
//         echo "Message has been sent";
//      }
// } catch (Exception $e) {
//     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
// }
// echo "\n";
?>