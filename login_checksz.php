<?php
include('conn.php');
$userid=$_POST['user_name'];
$pass=$_POST['pw'];

$sql="select * from masterlogin where user_name='$userid' and password='$pass' ";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
    // if(password_verify($_POST['pw'],$result['PASSWORD'])){
    //     header("location: index.php");
    // }
    // else{
    //     echo "
    //     <script>
    //       alert('Incorrect password!');
    //       window.location.href='registration_Sportozo.php';
    //       </script>
    //    ";
    // }
$_SESSION['user_name']=$result['user_name'];
echo "
        <script>
          alert('Successfully logged in');
          
          </script>
       ";

header('location:index_after_login.php');
}
else
{
// header('location:index.php#cta');
echo "
        <script>
          alert('Incorrect password! or user not exist SORRY');
          window.location.href='login_SportoZo.html';
          </script>
       ";

}
?>