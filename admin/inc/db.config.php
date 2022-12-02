<?php
$hname="localhost";
$uname="root";
$pass="";
$db="sportozo";

$con=mysqli_connect($hname,$uname,$pass,$db);
if(!$con){
    die("cannot connect to Database".mysqli_connect_error());
}

function filteration($data){
    foreach($data as $key=>$value){

   $data[$key]=trim($value);
   $data[$key]=stripslashes($value);
   $data[$key]=htmlspecialchars($value);
   $data[$key]=strip_tags($value);
    }
    return $data;
}
function select($sql,$values,$datatypes){
    $con=$GLOBALS["con"];
    if($stmt=mysqli_prepare($con,$sql)){
      mysqli_stmt_bind_param($stmt,$datatypes,...$values);
      if(mysqli_stmt_execute($stmt)){
         $res=mysqli_stmt_get_result($stmt);
         mysqli_stmt_close($stmt);
         return $res;
      }
      else{
        die("query cannot be executed - Select");
    }
    }
    else{
        die("query cannot be prepared - Select");
    }
}
function insert($sql,$values,$datatypes){
    $con=$GLOBALS["con"];
    if($stmt=mysqli_prepare($con,$sql)){
      mysqli_stmt_bind_param($stmt,$datatypes,...$values);
      if(mysqli_stmt_execute($stmt)){
         $res=mysqli_stmt_affected_rows($stmt);
         mysqli_stmt_close($stmt);
         return $res;
      }
      else{
        die("query cannot be executed - Insert");
    }
    }
    else{
        die("query cannot be prepared - Insert");
    }
}
function update($sql,$values,$datatypes){
    $con=$GLOBALS["con"];
    $stmt=mysqli_prepare($con,$sql);
    if($stmt){
      mysqli_stmt_bind_param($stmt,$datatypes,...$values);
      if(mysqli_stmt_execute($stmt)){
         $res=mysqli_stmt_affected_rows($stmt);
         mysqli_stmt_close($stmt);
         return $res;
      }
      else{
        die("query cannot be executed - Update");
    }
    }
    else{
        die("query cannot be prepared - Update");
    }
}


?>