

<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "codev4jm_1assam";
// Create connection
 $conn= mysqli_connect($host,$username)or die("Could'nt connect to database");
 




$conference_orgname = $_POST['conference_orgname'];
$conf_location = $_POST['conf_location'];
$address_venue = $_POST['address_venue'];
$date_conf = $_POST['date_conf'];
$time_conf = $_POST['time_conf'];
$objective = $_POST['objective'];
$host_name = $_POST['host_name'];
$conf_email = $_POST['conf_email'];
$conf_phone = $_POST['conf_phone'];



	if($_POST && "all required variables are present") {
    

    session_start();
    if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();

   
  }











 mysqli_select_db($conn,$dbname)or die("No database");
 
 
  mysqli_query($conn,"INSERT INTO codev4jm_1assam.contact(form_id,news_title,news_cat,section ,press_release,logo_press,sender_name,sender_email,sender_phone,organization_name) VALUES ('$form_id','$news_title','$news_cat','$section' ,'$press_release','$logo_press','$sender_name','$sender_email','$sender_phone','$organization_name')")or die(mysqli_error($conn)); 
 
 echo 'Data added';
?>