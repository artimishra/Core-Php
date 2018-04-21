


 
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "codev4jm_1assam";
// Create connection
 $conn= mysqli_connect($host,$username)or die("Could'nt connect to database");



$news_title = $_POST['news_title'];
$news_cat = $_POST['news_cat'];
$section = $_POST['section'];
$press_release = $_POST['press_release'];
$logo_press = $_POST['logo_press'];
$sender_name = $_POST['sender_name'];
$sender_email = $_POST['sender_email'];
$sender_phone = $_POST['sender_phone'];
$organization_name = $_POST['organization_name'];
$form_id=$_POST['form_id'];





	if($_POST && "all required variables are present") {
    

    session_start();
    if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();

   
  }











// Check connection
 
  mysqli_select_db($conn,$dbname)or die("No database");
 
  mysqli_query($conn,"INSERT INTO codev4jm_1assam.contact(form_id,news_title,news_cat,section ,press_release,logo_press,sender_name,sender_email,sender_phone,organization_name) VALUES ('$form_id','$news_title','$news_cat','$section' ,'$press_release','$logo_press','$sender_name','$sender_email','$sender_phone','$organization_name')")or die(mysqli_error($conn)); 
 
 
 echo 'Data added';
?>