<?php

$link = mysqli_connect ('localhost', 'root',"", 'SportoZo') or die
('Unable to connect the server. ');
$Name = $_POST['r_name'];
$Country = $_POST['country'];
$Email = $_POST['r_email'];
$category = $_POST['category'];
$sports = $_POST['sports'];
$event = $_POST['events'];
$mobile = $_POST['r_mob_num'];
$insert = "INSERT INTO registration(Name, Country, Email, Category, Event, Sport, Mobile) VALUES ('$Name','$Country','$Email','$category','$event','$sports','$mobile')";

$results = mysqli_query($link,$insert) or die(mysqli_error($link));

header("Location: Registration_third.php");
exit();;
?>