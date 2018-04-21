<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "codev4jm_1assam";
// Create connection
 $conn= mysqli_connect($host,$username)or die("Could'nt connect to database");

$sname=$_POST['sname'];
$semail=$_POST['semail'];
$sphone=$_POST['sphone'];
$purpose=$_POST['purpose'];
$organ_name=$_POST['organ_name'];

	if($_POST && "all required variables are present") {
    

    session_start();
    if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();

   
  }









// Check connection
 mysqli_select_db($conn,$dbname)or die("No database");
 
 mysqli_query($conn,"INSERT INTO codev4jm_1assam.contact(form_id,sname,semail,sphone ,purpose,organ_name) VALUES ('$form_id','$sname','$semail','$sphone' ,'$purpose','$organ_name')")or die(mysqli_error($conn)); 
 echo 'Data added';
?>