<?php

include('conn.php');
$userid=$_POST['USER_NAME'];
$userpass = $_POST['PASSWORD'];

$usercpass = $_POST['CPASSWORD'];
// $useroption = $_POST['OPTIONS'];
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require ('phpmailer/Exception.php');
require ('phpmailer/PHPMailer.php');
require ('phpmailer/SMTP.php');


if(isset($_POST['register'])){
    $user_exist_query = "SELECT * FROM `masterlogin` WHERE `USER_NAME`='$userid' ";
    $result = mysqli_query($conn,$user_exist_query);
    

    if($result){
        if(mysqli_num_rows($result)>0){
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['USER_NAME']==$userid){
                #error
                echo "
                 <script>
                   alert('$result_fetch[USER_NAME]- USER name already taken');
                   window.location.href='registration_Sportozo.php';
                   </script>
                ";

            }
        }
        else{
            $query = "INSERT INTO `masterlogin`(`USER_NAME`, `PASSWORD`, `CPASSWORD`) VALUES ('$userid','$userpass','$usercpass')";
            $final=mysqli_query($conn,$query);
            
            if($final){
                $mail = new PHPMailer(true);
                $mail->isSMTP();
   
               $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
               $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
               $mail->Username   = 'mona23sonai@gmail.com';                     //SMTP username
               $mail->Password   = 'kiiiwqqxihhdoprq';                               //SMTP password
               $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
               $mail->Port       = 465;    

    $mail->setFrom('mona23sonai@gmail.com', 'SportoZo');
    $mail->addAddress($_POST["USER_NAME"]) ;
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'WELCOME to our Sportozo Community';
    $mail->Body    = '<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <style>
        
        h1{
            
            padding:2rem;

        }
        
        img{
            margin-bottom:1rem;
            height: 24rem;
        }
        p{
            font-size: 1.5rem;
            text-decoration:underline;
        }
        
    </style>
</head>

<body>
        <h1>Congratulations! You are succesfully registered in SportoZo!!</h1>
        <img src="https://i.postimg.cc/FzQS6nvj/sendemailimg.jpg"/>
        <p>you can now login and follow us for more updates!</p>
    
    
</body>';

    $mail->send();
    
                echo "
                <script>
                alert('Registration Successful');
                window.location.href='index.php';
                </script>
                ";
            }
            else{
                echo "
                <script>
                  alert('registration unsuccessful');
                  window.location.href='registration_Sportozo.php';
                  </script>
                ";

            }
          

        }

    }
    else{
        echo "
        <script>
          alert('Cannot run Query--sorry');
          window.location.href='registration_Sportozo.php';
          </script>
        ";

    }
}







?>