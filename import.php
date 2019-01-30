<?php
$id1;
session_start();

include('config.php');

if (!isset($_SESSION['username'])) {
header('Location:https://www.artwaley.com/massmail/'); 
} else {
$email=$_SESSION['username'];
}

$qry="SELECT id FROM tbl_users where email='$email'";
$res=mysql_query($qry);
while($row=mysql_fetch_array($res))
{
 $id1=$row['id'];
}
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<!--<link rel="icon" type="image/png" href="assets/img/favicon.png">-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<link rel="shortcut icon" type="image/png" href="favicon.ico"/>	
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
	<link href="assets/css/demo.css" rel="stylesheet" />

    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>	
	<script type="text/javascript" src="functions.js"></script>
	
	<style>
	@media only screen and (max-width: 480px){
	.well-col1 {
    background-color: #f4f9f9;
    height: 271px !important;
    margin-left: 19px !important;
    margin-right: 19px !important;
	    padding-top: 0px !important;
    padding-bottom: 0px !important;
      }
	  
	  .well-col2 {
    background-color: #f4f9f9;
    height: 498px;
    margin-left: 19px !important;
    margin-right: 19px !important;
	    margin-bottom: 7px !important;
	}
	.table-res{
	overflow-y:scroll; 
	height:340px !important;

	background-color:#fff;
	
	}
	}
	
		pre.prettyprint{
		    background-color: #eee;
		    border: 0px;
		    margin-bottom: 60px;
		    margin-top: 30px;
		    padding: 20px;
		    text-align: left;
		}
		.atv, .str{
		    color: #05AE0E;
		}
		.tag, .pln, .kwd{
		    color: #3472F7;
		}
		.atn{
		    color: #2C93FF;
		}
		.pln{
		    color: #333;
		}
		.com{
		    color: #999;
		}
		.space-top{
		    margin-top: 50px;
		}
		.btn-primary .caret{
		    border-top-color: #3472F7;
		    color: #3472F7;
		}
		.area-line{
		    border: 1px solid #999;
		    border-left: 0;
		    border-right: 0;
		    color: #666;
		    display: block;
		    margin-top: 20px;
		    padding: 8px 0;
		    text-align: center;
		}
		.area-line a{
		    color: #666;
		}
		.container-fluid{
		    padding-right: 15px;
		    padding-left: 15px;
		}
		.table-shopping .td-name{
			min-width: 130px;
		}
	</style>
	
	<style>
	.well-row1{
	 background-color:#fff;
	 padding:0px;
	  }
	  
	.well-col1{
	 background-color:#f4f9f9;
	 height:498px;
	 margin-left:37px;
	  }
	  
	.well-col2{
	 background-color:#f4f9f9;
	 height:498px;
	 margin-left:20px;
	  }
	  
	  .dropdown-menu li > a{
	      
	      padding:0px 10px !important;
	      background:#fafafa;
	  }
	  
	  .main-raised {
    margin: -60px 30px 0px;
    border-radius: 6px;
    box-shadow: 0 0 0 0 #fff !important;
}
.navbar{
box-shadow: 0 0 0 0 #fff !important;
}
	</style>
</head>

<body class="components-page" style="background-color:#fff; padding:0 70px 0 70px;">
<div class="container1">
<div class="row">
<nav class="navbar navbar  navbar-fixed-top navbar-color-on-scroll" style="position:fixed; background-color:#536890; z-index:1030;padding:0px; border-radius:0px; "  role="navigation">
  	<!-- Navbar Primary  -->
					
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-primary">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
								<a href="dashboard">
           <div class="logo-container">
                <div class="logo" >
                    <img src="assets/img/logaa.png"   alt="Creative Tim Logo">
                </div>
                
            </div>
      </a>

							</div>

							<div class="collapse navbar-collapse" id="example-navbar-primary">
								<ul class="nav navbar-nav navbar-right">
									<li class="active">
		                                <a href="#pablo" style=" display:none" data-toggle="modal" data-target="#myModal">
											<i class="material-icons">explore</i>
											Discover
		                                </a>
		                            </li>
		                            <li class="active1">
		                                <a href="#pablo" style="" data-toggle="modal" data-target="#myModalSignUP1">
											<i class="material-icons">account_circle</i>
		                                    <?php echo $fullname;?>
		                                </a>
		                            </li>
		                            <li class="active1">
		                                <a href="logout.php" style="">
											<i class="material-icons">settings</i>
											Logout
		                                </a>
		                            </li>
								</ul>
							</div>
						</div>
					</nav>
</div>
				
<!-- End Navbar Primary -->
<div class="wrapper">
<div class="main main-raised" style="background-color:#e9ebee;">
<div class="section" style="padding-bottom:2px;">

	<div class="row" style="padding-top:52px;"> 
	</div>
	  
	<!--Start Content-->
	<div class="row">
		<div class="col-md-1 col-sm-1 col-lg-1">
		</div>
		
		<div class="col-md-10 col-lg-10  col-sm-10">
		 
				<div class="row" align="center">
				<form action="export.php" method="POST">
					  <div class="col-md-6  col-sm-6">
					 
					  <button type="submit" name="export"class="btn btn-white btn-sm"><i class="material-icons">cloud_download</i> Download .CSV file</button>
				</form>	  
					  <a class="btn btn-white btn-sm" href="import" style="text-decoration:none; color:gray;"><i class="material-icons">unarchive</i> Import your .CSV file</a>
					  </div>
				  
				<div class="col-md-1  col-sm-1">
				    
				</div>
					  <div class="col-md-5  col-sm-5 col-lg-5">
					  <button class="btn btn-white btn-sm "><i class="material-icons">done</i> Sent Emails</button>
					  <button class="btn btn-white btn-sm "><i class="material-icons">email</i> Pending Emails</button>
					  </div>
				</div>
				
		</div>
		
		<div class="col-md-1 col-sm-1 col-lg-1">
		</div>
	</div>
	
	  	   
	  
	  
	  
	<div class="row" style="padding-top:10px;">
		  <div class="col-md-2 col-sm-2 col-lg-2 well well-col1">
		 
                        
						 
						 
                                               
					  
<div class="btn-group-vertical" style="padding-top:24px; width:100%;" >
  <a href="javascript:void(0)" class="btn btn-white" style="text-align:left;"><i class="material-icons">home</i> Home</a>
  <a href="javascript:void(0)" class="btn btn-white" style="text-align:left;"><i class="material-icons">email</i> Emails</a>
  <a href="javascript:void(0)" class="btn btn-white" style="text-align:left;"><i class="material-icons">face</i> Employee</a>
  <a href="javascript:void(0)" class="btn btn-white" style="text-align:left;"><i class="material-icons">group</i> Artist</a></a>
  <a href="javascript:void(0)" class="btn btn-white" style="text-align:left;"><i class="material-icons">shopping_cart</i> Products</a>
</div>

                    
		  
		  
		  </div>
		  
		  
		  <div class="col-md-9 col-sm-9 col-lg-9 well well-col2">
		  <div class="row " >
		 
		  <div class="col-md-12">
		  
		  <div id="message">
		  
		  </div>
		  </div>
		  </div>
			
		  <div class="row " >
		  
		       
		 
		  

							<div id="form">
							<?php
							//Upload File
							if (isset($_POST['submit'])) {
								if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
									echo "<center><h3>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h3></center>";
								/*	echo "<h4>Displaying contents:</h4>";
									readfile($_FILES['filename']['tmp_name']);*/
									
								}
								//Import uploaded file to Database
								$handle = fopen($_FILES['filename']['tmp_name'], "r");
								while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
									
							$import="INSERT INTO `mass_mail`.`user_data` (`auto_id`, `user_id`, `id`, `name`, `email`, `city`, `status`, `pin`) VALUES (NULL, '$id1', '$data[0]', '', '$data[1]', '', '$data[2] ', '')";
									mysql_query($import) or die(mysql_error());
								}

								fclose($handle);

								print "<center><h3><a href='dashboard' class='btn btn-white' style='text-decoration:none;color:#444444;'>back</a> </h3></center>";

								//view upload form
							}else {

								print "<center>Upload new csv by browsing to file and clicking on Upload</center><br />\n";

								print "<form enctype='multipart/form-data' action='import' method='post'>";

								

								print "<div class='row'>
								<div class='col-md-5'>
								</div>
								<div class='col-md-4'><input  style='padding:10px; float:right;' type='file' class='btn btn-white btn-md' name='filename'>
								</div>
								<div class='col-md-3'><input type='submit'  class='btn btn-info btn-md' name='submit' value='Upload'></form>
								</div>
								</div>
								
								";

								
								
								

							}

							?>


							</div>

		  
		  
		  
		  
		  
</div>
			 			
</div>
	<!--End Content-->
</div>	
</div>
	
	<!--
     <footer class="footer footer-transparent">
        <div class="container">
            <nav class="pull-left">
                <ul>
					<li>
						<a href="http://www.creative-tim.com">
							Creative Tim
						</a>
					</li>
					<li>
						<a href="http://presentation.creative-tim.com">
						   About Us
						</a>
					</li>
					<li>
						<a href="http://blog.creative-tim.com">
						   Blog
						</a>
					</li>
					<li>
						<a href="http://www.creative-tim.com/license">
							Licenses
						</a>
					</li>
                </ul>
            </nav>
            <div class="social-area pull-right">
                <a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/CreativeTim">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/CreativeTim">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a class="btn btn-social btn-google btn-simple" href="https://plus.google.com/+CreativetimPage">
                    <i class="fa fa-google-plus"></i>
                </a>
            </div>
            <div class="copyright">
                &copy; 2016 Creative Tim, made with love
            </div>
        </div>
    </footer> -->
	
<!-- Modal Core -->
</div>


	<!--   Core JS Files   -->
	
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

    <script>
        var header_height;
        var fixed_section;
        var floating = false;

        $().ready(function(){
            suggestions_distance = $("#suggestions").offset();
            pay_height = $('.fixed-section').outerHeight();

			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
        });
    </script>

</body>


</form>
	








</html>

