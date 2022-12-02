<?php

$link = mysqli_connect ('localhost', 'root',"", 'SportoZo') or die
('Unable to connect the server. ');
if($_POST['cpass'] != $_POST['pass']){
    echo "Enter Correct Password!";
}
$user_name1 = $_POST['email'];
$password = $_POST['cpass'];

$insert = "INSERT INTO masterlogin ('USER_NAME','PASSWORD') VALUES('$user_name1','$password')";

$results = mysqli_query($link,$insert) or die(mysqli_error($link));

echo "Data inserted successfully!";
?>