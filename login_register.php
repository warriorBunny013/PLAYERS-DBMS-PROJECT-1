<?php
  require("db.config.php");
  require("essentials.php");
  require("sendgrid-php/sendgrid-php.php");
  define('SITE_URL','http://127.0.0.1/shreya/PLAYERS-DBMS-PROJECT-1/PLAYERS-DBMS-PROJECT-1/	');
  function send_mail($uemail,$name,$token)
  {
    $email = new \SendGrid\Mail\Mail(); 
$email->setFrom("mona23sonai@gmail .com", "Sportozo");
$email->setSubject("Account Verification Link");
$email->addTo($uemail,$name);
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", 
    "
     Click the link to confirm your email: <br>
     <a href='".SITE_URL."email_confirm.php?email=$uemail&token=$token"."'>
     CLICK ME
     </a>
    "
);
$sendgrid = new \SendGrid(SENDGRID_API_KEY);
try {
    $sendgrid->send($email);
    return 1;

} catch (Exception $e) {
    return 0;
 }
}


if(isset($_POST['register'])){
    $data=filteration($_POST);
    //match password amd confirm password
    if($data['pass']!=$data['cpass']){
        echo 'pass_mismatch';
        exit;

    }
    //check user exit or not
    $u_exist=select("SELECT * FROM `masterlogin` WHERE `USER_NAME`=? LIMIT 1",
    [$data['email']],"s");
    if(mysqli_num_rows($u_exist)!=0){
        $u_exist_fetch=mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email']==$data['email'])?'email_already':'phone_already';
        exit;
    }
    // upload user image to server
    $img=uploadUserImage($_FILES['profile']);
    if($img=='inv_img'){
        echo 'inv_img';
        exit;
    }
    else if($img=='upd_failed'){
        echo 'upd_failed';
        exit;
    }
    // send confirmation link to user's email
    $token=bin2hex(random_bytes(16));
    if(!send_mail($data['email'],$data['name'],$token)){
        echo "mail_failed";
        exit;
    };
    $enc_pass=password_hash($data['pass'],PASSWORD_BCRYPT);
    $query="INSERT INTO `masterlogin`(`USER_NAME`, `PASSWORD`, `CPASSWORD`, `OPTIONS`, `PROFILE`, `token`) VALUES (?,?,?,?,?,?)";
   
    $values=[$data['USER_NAME'],$data['PASSWORD'],$data['CPASSWORD'],$data['OPTIONS'],$img,$enc_pass,$token];

   if(insert($query,$values,'ssssss')){
     echo 1;
    }
    else{
        echo 'ins_failed';
    }

}

?>