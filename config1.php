<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "codev4jm_1assam";
// Create connection
 $conn= mysqli_connect($host,$username)or die("Could'nt connect to database");

 
$types = $_POST['types'];
$orgname = $_POST['orgname'];
$site = $_POST['site'];
$city = $_POST['city'];
$media_name = $_POST['media_name'];
$designation = $_POST['designation'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$status = $_POST['status'];
$media_type = $_POST['media_type'];
$expectations = $_POST['expectations'];
$logo = $_POST['logo'];
$profile = $_POST['profile'];



  if($_POST && "all required variables are present") {
    

    session_start();
    if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();

   
  }











// Check connection
 mysqli_select_db($conn,$dbname)or die("No database");
 
 mysqli_query($conn,"INSERT INTO codev4jm_1assam.media_team(types,orgname,site ,city,media_name,designation,email,mobile,status,media_type,expectations,logo,profile) VALUES ('$types','$orgname','$site' ,'$city','$media_name','$designation','$email','$mobile','$status','$media_type','$expectations','$logo','$profile')")or die(mysqli_error($conn)); 
 

 echo 'Data added';
?>