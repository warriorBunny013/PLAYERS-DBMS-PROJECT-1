<?php
define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'shreya/PLAYERS-DBMS-PROJECT-1/PLAYERS-DBMS-PROJECT-1/images/');
define('USERS_FOLDER','users/');
define('SITE_URL','http://127.0.0.1/shreya/PLAYERS-DBMS-PROJECT-1/PLAYERS-DBMS-PROJECT-1/');

define('SENDGRID_API_KEY',"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");
function adminLogin(){
    session_start();
    if((isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"]==true)){
        // echo"<script>
        // window.location.href='dashboard.php';
        // </script>";
        header("location: index.php");
    }
}
function redirect($url){
    echo"<script>
    window.location.href='$url';
    </script>";
}

function alert($type,$msg){
    $bs_class=($type=="success")?"alert-success":"alert-danger";
    echo <<<alert
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                
                <strong class="me-3">$msg</strong>
            </div>

            alert;
}

function uploadUserImage($image){
    $valid_mime=['image/jpeg','image/png','image/webp'];
    $img_mime=$image['type'];

    if(!in_array($img_mime,$valid_mime)){
        return 'inv_img';
    }
    else{
        $ext=pathinfo($image['name'],PATHINFO_EXTENSION);
        $rname='IMG_'.random_int(11111,99999)."jpeg";

        $img_path=UPLOAD_IMAGE_PATH.USERS_FOLDER.$rname;
        if($ext=='png'|| $ext=='PNG'){
            $img=imagecreatefrompng($image['tmp_name']);

        }else{
            $img=imagecreatefromjpeg($image['tmp_name']);
        }

        if(imagejpeg($img,$img_path,75)){
            return $rname;
        }
        
        else{
            return 'upd_failed';
        }
    }
}
?>