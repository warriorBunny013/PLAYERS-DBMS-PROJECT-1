<?php
  
  require("db.config.php");
  require("essentials.php");
  // require("settings.php");
  adminLogin();
  if(isset($_POST['get_general'])){
    $q="SELECT * FROM `settings` WHERE `sr_no`=?";
    $values=[1];
    $res=select($q,$values,"i");
    $data=mysqli_fetch_assoc($res);
    $json_data=json_encode($data);
    echo $json_data;
  }
  if(isset($_POST['upd_general'])){
    
    $frm_data=filteration($_POST);
    $q="UPDATE `settings` SET `site_title`=?,`site_about`=? WHERE `sr_no`=?";
    $values=[$frm_data['site_title'],$frm_data['site_about'],1];
    $res=update($q,$values,'ssi');
    echo $res;
  }
  if(isset($_POST['get_contacts'])){
    $q="SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $values=[1];
    $res=select($q,$values,"i");
    $data=mysqli_fetch_assoc($res);
    $json_data=json_encode($data);
    echo $json_data;
  }
  if(isset($_POST['upd_shutdown'])){
    
    $frm_data=($_POST['upd_shutdown']==0)?1:0;
    $q="UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
    $values=[$frm_data,1];
    $res=update($q,$values,'ii');
    echo $res;
  }

  if(isset($_POST['upd_contacts'])){
    
    $frm_data=filteration($_POST);
    $q="UPDATE `contact_details` SET `address`=?,`pn1`=?,`email`=?,`openhours`=?,`fb`=?,`twitter`=?,`instagram`=?,`LinkedIn`=? WHERE `sr_no`=?";
    $values=[$frm_data['address'],$frm_data['pn1'],$frm_data['email'],$frm_data['openhours'],$frm_data['fb'],$frm_data['twitter'],$frm_data['instagram'],$frm_data['LinkedIn'],1];
    $res=update($q,$values,'ssssssssi');
    echo $res; 
  }

?>