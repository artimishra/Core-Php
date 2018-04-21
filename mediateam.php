<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "codev4jm_1assam";
// Create connection
 $conn= mysqli_connect($host,$username)or die("Could'nt connect to database");
/*  if(!$con)
	 echo'<h1>not connected to mysql<h1>';
 else
	  echo'<h1> connected to mysql<h1>'; */
 mysqli_select_db($conn,$dbname)or die("No database");
if(isset($_POST['media_name']))
{
	$media_name=$_POST['media_name'];
}
if(isset($_POST['logo']))
{
	$media_name=$_POST['logo'];
}
if(isset($_POST['media_type']))
{
	$media_type=$_POST['media_type'];
}
if(isset($_POST['city']))
{
	$city=$_POST['city'];
}
if(isset($_POST['types']))
{
	$types=$_POST['types'];
}
 mysqli_select_db($conn,$dbname)or die("No database");
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/logo-icon.png" type="image/x-icon" />
<title>WomenInPolitics</title>
<!-- StyleSheets Start -->
<link href="css1/custom.css" rel="stylesheet">
<link href="css1/color.css" rel="stylesheet">
<link href="css1/responsive.css" rel="stylesheet">
<link href="css1/bootstrap.min.css" rel="stylesheet">
<link href="css1/owl.carousel.min.css" rel="stylesheet">
<link href="css1/font-awesome.min.css" rel="stylesheet">
<link href="css1/prettyPhoto.css" rel="stylesheet">
<!-- StyleSheets End -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  
    <![endif]-->
	<body>
	<div class="wrapper"> 
  <!--Header Start-->
  <header id="header" class="header">
    <div class="side-icon"><a href="#"> <i class="fa fa-bars"></i></a> </div>
    <div class="logo"><a href="index-2.html"> <span class="logo-icon"><img src="images/logo-icon.png" alt=""></span> <span class="logo-txt"> <img src="images/logo-txt.png" alt=""> </span> </a> </div>
    
    <!--Site Nav Start-->
    <div class="site-nav">
      <nav class="navbar">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <i class="fa fa-bars"></i> </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav">
            <li><a href="#"> Home </a>
              <ul class="sub-menu">
                <li><a href="index-2.html">Home One</a></li>
                <li><a href="home-two.html">Home Two</a></li>
                <li><a href="location-map.html">Home Three</a></li>
              </ul>
            </li>
            <li><a href="locations.html"> Explore Laton</a></li>
            <li> <a href="#">Causes</a>
              <ul class="sub-menu">
                <li><a href="causes-grid.html">Causes</a></li>
                <li><a href="causes-grid-two.html">Causes Grid</a></li>
                <li><a href="causes-details.html">Causes Details</a></li>
              </ul>
            </li>
            <li> <a href="#">Departments</a>
              <ul class="sub-menu">
                <li><a href="departments.html">Departments</a></li>
                <li><a href="department-details.html">Department Details</a></li>
              </ul>
            </li>
            <li> <a href="#">Events</a>
              <ul class="sub-menu">
                <li><a href="events.html">Events</a></li>
                <li><a href="event-full.html">Event Full</a></li>
                <li><a href="event-list.html">Events List</a></li>
                <li><a href="event-grid.html">Event Grid</a></li>
                <li><a href="event-details.html">Event Details</a></li>
              </ul>
            </li>
            <li> <a href="#">Pages</a>
              <ul class="sub-menu">
                <li><a href="#">News</a>
                  <ul class="sub-menu">
                    <li><a href="news-coverage.html">News Coverage</a></li>
                    <li><a href="press-releases.html">Press Releases</a></li>
                    <li><a href="today-newspaper.html">Today NewsPaper</a></li>
                    <li><a href="latonthebeauty.html">City Updates</a></li>
                  </ul>
                </li>
                <li><a href="#">Blog</a>
                  <ul class="sub-menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-full.html">Blog Full</a></li>
                    <li><a href="blog-grid.html">Blog Grid</a></li>
                    <li><a href="blog-list.html">Blog List</a></li>
                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                    <li><a href="blog-details-two.html">Blog Details</a></li>
                    <li><a href="blog-details.html">Blog Details Tow</a></li>
                  </ul>
                </li>
                <li><a href="#">Shop</a>
                  <ul class="sub-menu">
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="product-detail.html">Shop Details</a></li>
                  </ul>
                </li>
                <li><a href="#">Team</a>
                  <ul class="sub-menu">
                    <li><a href="team.html">Team</a></li>
                    <li><a href="officials.html">Team Details</a></li>
                  </ul>
                </li>
                <li><a href="#">City</a>
                  <ul class="sub-menu">
                    <li><a href="city-forum.html">City Forum</a></li>
                    <li><a href="sports.html">City Sports</a></li>
                    <li><a href="locations.html">City Location</a></li>
                    <li><a href="location-map.html">City Map</a></li>
                    <li><a href="latonthebeauty.html">Laton The Beauty</a></li>
                    <li><a href="location-details.html">Details</a></li>
                  </ul>
                </li>
                <li><a href="#">Jobs</a>
                  <ul class="sub-menu">
                    <li><a href="jobs.html">Jobs</a></li>
                    <li><a href="job-details.html">Job Details</a></li>
                  </ul>
                </li>
                <li><a href="#">Gallery</a>
                  <ul class="sub-menu">
                    <li><a href="gallery-full.html">Gallery Full</a></li>
                    <li><a href="gallery-grid.html">Gallery Grid</a></li>
                    <li><a href="gallery.html">Gallery Grid Full</a></li>
                    <li><a href="gallery-filterable.html">Gallery Filterable</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Contact</a>
            
            <ul class="sub-menu">
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="contact-two.html">Contact Two</a></li>
                    <li><a href="contact-three.html">Contact Three</a></li>
                  </ul>
            
            </li>
          </ul>
        </div>
      </nav>
    </div>
    
    <!--Site Nav End-->
    
    <div class="header-right">
      <ul>
        <li>
          <div class="h-weather"> <img src="images/cloud-icon.png" alt=""> <strong>15�</strong>C / <strong>59�</strong>F </div>
        </li>
        <li><a href="#"><img src="images/bus-icon.png" alt=""></a></li>
        <li><a href="location-map.html"><img src="images/map-icon.png" alt=""></a></li>
        <li>
          <div class="search-icon"> <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fa fa-search"></i> </a> </div>
        </li>
      </ul>
    </div>
    <div class="collapse" id="collapseExample">
      <div class="search-holder">
        <form method="get" >
          <input type="text" placeholder="Search Here" class="search-input">
          <button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </div>
    </div>
    
    <!--Alerts Start-->
    
    <div class="alerts">
      <div id="alert-btn" class="alert-btn"><span class="a-count">2</span> <i class="fa fa-bell-o" aria-hidden="true"></i></div>
      <ul class="alerts-list">
        <li>
          <p>Some community centers are open. The Copley Square library is open from 1 - 5 p.m. All other municipal buildings and libraries are closed.</p>
          <span>Education Department</span> </li>
        <li>
          <p>Some community centers are open. The Copley Square library is open from 1 - 5 p.m. All other municipal buildings and libraries are closed.</p>
          <span>Education Department</span> </li>
      </ul>
    </div>
    <!--Alerts End--> 
  </header>
  <!--Header End--> 
  
  <!--Sub Header Start-->
  <div class="sub-header">
    <div class="container">
      <h1>Team</h1>
      <p>Before long, credit histories may be replaced by 'life scores', determined by the nature of your Airbnb reviews.</p>
    </div>
  </div>
  <div class="fl-breadcrumps">
    <div class="container">
      <ul>
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Team</a></li>
      </ul>
    </div>
  </div>
</head>
<body>

  <!--Sub Header End--> 
  
  <div class="main-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="filter-sidebar">
                        <div class="col-md-12 form-title" style="padding-bottom:1px;">
                            <h5 style="padding-bottom:1px;">Search  Professionals</h5>
						
                        </div>
                        <form method="post" action="#">
						   <div class="col-md-12 form-group">
                                   <select id="venuetype" name="media_name" class="form-control">
                                    <option value="">Media Name</option>
                                    <!--<option value="Barn">Print</option>
                                    <option value="Boutique">TV</option>
                                    <option value="Castle">Radio</option>
                                    <option value="Castle">Digital</option>
                                    <option value="Castle">Magazine</option>-->
									<?php 
                                  $query="select distinct(media_name) from media_team";
											$ress=mysqli_query($conn,$query);
							        while($row=mysqli_fetch_array($ress))
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row['media_name']; ?></option>
                                    <?php

                                    $media_name = $_POST['media_name'];
									}
									?>
								
                              
                                </select>
                            </div>
						   <div class="col-md-12 form-group">
                                   <select id="venuetype" name="media_type" class="form-control">
                                    <option value="">Media Type</option>
                                   <!-- <option value="Barn">Print</option>
                                    <option value="Boutique">TV</option>
                                    <option value="Castle">Radio</option>
                                    <option value="Castle">Digital</option>
                                    <option value="Castle">Magazine</option>-->
									<?php 
                                  $query="select distinct(media_type) from media_team";
											$ress=mysqli_query($conn,$query);
							        while($row=mysqli_fetch_array($ress))
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row['media_type']; ?></option>
                                    <?php

                                    $media_type = $_POST['media_type'];
									}
									?>
								
                              
                                </select>
                            </div>
							   <div class="col-md-12 form-group">
                                   <select id="venuetype" name="city" class="form-control">
                                    <option value="">Select Location</option>
                                    <!--<option value="Barn">New Delhi</option>
                                    <option value="Boutique">Mumbai</option>
                                    <option value="Castle">Kolkata</option>-->
									<?php 
                                  $query="select distinct(city) from media_team";
											$ress=mysqli_query($conn,$query);
							        while($row=mysqli_fetch_array($ress))
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row['city']; ?></option>
                                    <?php

                                    $city = $_POST['city'];
									}
									?>
								
                              
                                </select>
                            </div>
						
                            <div class="col-md-12 form-group">
                                <select id="venuetype" name="types" class="form-control">
                                    <option value="">Profile Type</option>
                                    <!--<option value="Barn">Freelancer</option>
                                    <option value="Boutique">Editor</option>
                                    <option value="Castle">Publisher</option>
                                    <option value="Country House">Techncial Crew</option>
                                    <option value="Exclusive use">Staff Writer</option>
                                    <option value="Garden weddings">Reporter</option>-->
									<?php 
                                  $query="select distinct(types) from media_team";
											$ress=mysqli_query($conn,$query);
							        while($row=mysqli_fetch_array($ress))
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row['types']; ?></option>
                                    <?php

                                    $types = $_POST['types'];
									}
									?>
								
                                    
                                </select>
                            </div>
	
                            <div class="col-md-12 form-group">
                                 <select id="capacity" name="capacity" class="form-control">
                                    <option value="">Engagement Type</option>
                                    <option value="0 - 99">One Time</option>
                                    <option value="100 - 199">Weekly</option>
                                    <option value="200 - 299">Monthly</option>
                                    <option value="400+">Contractual</option>
                                </select>
                            </div>
                                     
                            <div class="col-md-12 form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Search" name="submit">
                            </div>
                        </form>
                    </div>
					</div>
	<div class="col-md-10 col-sm-9">
    <!--Govt Department Start-->
	<?php
	
	
	
		if(@$_REQUEST['submit'])
	    {

    
        $media_name = @$_REQUEST['media_name'];	
		$city = @$_REQUEST['city'];	
		$media_type = @$_REQUEST['media_type'];	
		$types = @$_REQUEST['types'];
		
		
		
        		
        		
               
		 $sql2="SELECT `id`, `media_name`, `city`, media_type,`types`,logo FROM `media_team` where media_name='$media_name' and city='$city' and types='$types' and media_type='$media_type'";  
			
			$result = mysqli_query($conn,$sql2);
			
            $count2 = mysqli_num_rows($result);
			
					
								// output data of each row
						while($row23 = mysqli_fetch_array($result)) {	
				echo
    
    '<div class="govt-departments">
      <div class="container">
        <h2>Media Professionals </h2>
        <div id="govt-loc" class="owl-carousel owl-theme">
        
        <!--Item Start-->
          <div class="item">
             <!--Team Box Start-->
            <div class="team-box">
              <div class="thumb">
                <div class="team-hover">
                  <h6>'.$row23['media_name'].'</h6>
                  <p>Media Professionals</p>
                  <div class="mayor-social"> <a class="fb" href="#"><i class="fa fa-facebook"></i></a> <a class="tw" href="#"><i class="fa fa-twitter"></i></a> <a class="lin" href="#"><i class="fa fa-linkedin"></i></a> <a class="yt" href="#"><i class="fa fa-youtube"></i></a> </div>
                </div>
                <img src="'.$row23['logo'].'" alt=""></div>
              <div class="team-txt">
                <h5>Name: '.$row23['media_name'].'</h5>
                <p>Listed by: '.$row23['types'].'</p>
              </div>
            </div>
			
			<div class="loc-footer" style="background-color:#fff;">
                <ul>

                  <li class="loc-rating">4.98 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></li>

                  <li class="more">

                    <div class="btn-group dropup">

                      <button type="button" data-toggle="dropdown"> <i class="fa fa-ellipsis-h"></i> </button>

                      <ul class="dropdown-menu">

                        <li><a href="invitepress.php"><i class="fa fa-envelope-o"></i> Invite for Press Conference</a></li>

                        <li><a href="pressrelease.php"><i class="fa fa-commenting-o"></i>Send Press Release</a></li>

                        <li><a href="contactme.php"><i class="fa fa-compass"></i>Contact</a></li>

                      </ul>

                    </div>

                  </li>

                </ul>

              </div>
			  </div>
			  </div>
			  </div>
			  </div>
						
          <!--Team Box End--> 
          
          </div>';
						}
		}
		?>
          
          <!--Item End-->
          
          <!--Item Start-->
           <?php
														
														if(isset($_POST['submit']))
                                                        {
    
                                                         $media_name = $_POST['media_name'];
	                                                     $city = $_POST['city'];	
		                                                 $media_type = $_POST['media_type'];	
		                                                 $types = $_POST['types'];
														  
                                                         														 
      
                                                         $sql="SELECT  `media_name`, `city`, `media_type`, `types`,logo FROM `media_team` WHERE  `media_name`='$media_name' and city='$city' and media_type='$media_type and types='$types'";
														
	                                                     $result = mysqli_query($conn,$sql);
														 
                                                         $count = mysqli_num_rows($result);
														 







						
					
						// output data of each row
						while($row = mysqli_fetch_array($result)) {	
        echo  '<div class="item">
                 <div class="team-box">
              <div class="thumb">
                <div class="team-hover">
                  <h6>'.$row23['media_name'].'</h6>
                  <p>Aliquam nec finibus dui, eget dapibus leo. Suspendisse aliquam, justo in venenatis congue, sem odio vestibulum lorem, quis consectetur arcu nulla in est. </p>
                  <div class="mayor-social"> <a class="fb" href="#"><i class="fa fa-facebook"></i></a> <a class="tw" href="#"><i class="fa fa-twitter"></i></a> <a class="lin" href="#"><i class="fa fa-linkedin"></i></a> <a class="yt" href="#"><i class="fa fa-youtube"></i></a> </div>
                </div>
                <img src="'.$row23['logo'].'" alt=""></div>
              <div class="team-txt">
                <h5>Scott  Stringer</h5>
                <p>Staff Reporter, ToI</p>
              </div>
            </div>
			
			<div class="loc-footer" style="background-color:#fff;">

                <ul>

                  <li class="loc-rating">4.98 <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></li>

                  <li class="more">

                    <div class="btn-group dropup">

                      <button type="button" data-toggle="dropdown"> <i class="fa fa-ellipsis-h"></i> </button>

                      <ul class="dropdown-menu">

                        <li><a href="invitepress.php"><i class="fa fa-envelope-o"></i> Invite for Press Conference</a></li>

                        <li><a href="pressrelease.php"><i class="fa fa-commenting-o"></i> Invite for press release</a></li>

                        <li><a href="contactme.php"><i class="fa fa-compass"></i>Contact</a></li>

                      </ul>

                    </div>

                  </li>

                </ul>

              </div>
          </div>
          
          <!--Item End-->
          
          <!--Item Start-->

          
         
    </div>
  </div>
  </div>
  </div>';
						
						
						}
														}
														?>
  <!--Content Wrapper End--> 
    <!--Footer Start-->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="widget"> <img src="images/light-logo.png" alt=""> </div>
        </div>
        <div class="col-md-3">
          <div class="widget textwidget">
            <h6>Support the NewYork</h6>
            <p>Each gift matters. Become a beacon for art education and talent.
              love for the city , love for the people </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget">
            <div class="widget textwidget">
              <h6>Contact Info</h6>
              <p> 1-877-783-1608<br>
                info@lintona.co.wo </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget">
            <div class="widget textwidget">
              <h6>Follow Us</h6>
              <ul class="footer-social">
                <li> <a href="#"><i class="fa fa-facebook-square"></i></a> </li>
                <li> <a href="#"><i class="fa fa-twitter-square"></i></a> </li>
                <li> <a href="#"><i class="fa fa-youtube-square"></i></a> </li>
                <li> <a href="#"><i class="fa fa-google-plus-square"></i></a> </li>
                <li> <a href="#"><i class="fa fa-pinterest-square"></i></a> </li>
                <li> <a href="#"><i class="fa fa-vimeo-square"></i></a> </li>
              </ul>
              <strong class="skype-id">#quebecregion</strong> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 copyr">
          <p>Copyright � 1997 - 2018 Lintona City All rights reserved. Privacy Policy   Terms &amp; Conditions   Site Credits</p>
        </div>
      </div>
    </div>
  </footer>
  <!--Footer End--> 
  
</div>
<!-- JS Files Start --> 
<script src="js1/jquery.min.js"></script> 
<script  src="js1/jquery-migrate-1.2.1.min.js"></script> 
<script src="js1/bootstrap.min.js"></script> 
<script src="js1/owl.carousel.min.js"></script> 
<script src="js1/jquery.prettyPhoto.js"></script> 
<script src="js1/custom.js"></script>
</body>


</html>
