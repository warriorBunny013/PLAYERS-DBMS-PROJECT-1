<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require ('phpmailer/Exception.php');
require ('phpmailer/PHPMailer.php');
require ('phpmailer/SMTP.php');


if(isset($_POST["send"])){
    // $mail = new PHPMailer(true);
    $mail ->isMail();
   
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mona23sonai@gmail.com';                     //SMTP username
    $mail->Password   = 'kiiiwqqxihhdoprq';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;    

    $mail->setFrom('mona23sonai@gmail.com', 'SportoZo');
    $mail->addAddress($_POST["email"]) ;
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'WELCOME to our Sportozo Community';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();
    echo "
     <script> alert('sent successfully');
     document.location.href='index.php';
     </script>
    ";

}
?>
