<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Synergy Warehouse</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Miss Fick" />
		
		<!-- Bootstrap -->
		<script src="js/modernizr.custom.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/flickity.css" rel="stylesheet" >
		<link href="css/animate.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/queries.css" rel="stylesheet">
		
		<!-- Facebook and Twitter integration -->
		
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
		<header>
			<section class="hero">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row nav-wrapper">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
							<a href="#"><img src="img/butterfly.png" alt="NADIA Logo"></a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
							<p></p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
						</div>
					</div>
					<div class="row hero-content">
						<div class="col-md-12">
							<h1 class="animated fadeInDown">Welcome to Synergy</h1>
							<a href="#neworders" class="use-btn animated fadeInUp">New Orders</a> <a href="#dispatch" class="learn-btn animated fadeInUp">Dispatch Requests<i class="fa fa-arrow-left"></i></a>
						</div>
					</div>
				</div>
			</section>
		</header>
		<section class="video" id="signin">
			
			<div class="container">
				<div class="row" id="neworders">
			<?php
				$conn = mysql_connect("localhost","root","");
				mysql_select_db("whouse",$conn);
				$result = mysql_query("SELECT * FROM neworder");
				$row= mysql_fetch_array($result);
			?>
										<h1>New Orders are as follows</h1>
										<table width="500" cellpadding="10"><tr><th>Order ID</th><th>Client Id</th><th>Order_Date</th><th>Action</tr>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
							<tr>
								<td><?php echo $row["Order_ID"]; ?></td>
								<td><?php echo $row["client_id"]; ?></td>
								<td><?php echo $row["orderdate"]; ?></td>
								<td><a href="checkin_order.php?Order_ID=<?php echo $row["Order_ID"];?>">Check In</a></td>
								
							</tr>
				
<?php
$i++;
}
?>
	</table>
			</div>
			</div>
		</section id="signin">
		<section class="showcase">
			<div class="showcase-wrap">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
						<p></p>
<!-- MOBILE DEVICE WOULD BE NICE IF YOURS WERE WORKING -->
							
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<section class="features-intro" id="">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 nopadding features-intro-img">
						<div class="features-bg">
							<div class="texture-overlay"></div>
							<div class="features-img wp1">
								<img src="img/features-intro01.jpg" alt="pic">
							</div>
						</div>
					</div>
					<div class="col-md-6 nopadding">
					<!--h1>Register</h1-->
						<div class="features-slider">
								<!--ul class="slides" id="featuresSlider">
									<li-->
										
	<!--REGISTRATION FORM OVER HERE>								
										<form name="frmUser" method="post" action="register.php">
										<div style="width:600px; margin-left: 20px">
											<div align="right" style="padding-left: 5px; padding-bottom:5px; padding-top:-5px;"><!--a href="list_user.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a--><!--/div>
											<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
											<tr class="tableheader">
											<td colspan="2"></td>
											</tr>
											<tr>
									<td><label>UserName</label></td>
									<td><input type="text" name="name" class="txtField"></td>
									</tr>
									<tr>
									<td><label>Surname</label></td>
									<td><input type="text" name="surname" class="txtField"></td>
									</tr>
									<tr>
									<td><label>ID Number</label></td>
									<td><input type="text" name="idno" class="txtField"></td>
									</tr>
									<tr>
									<td><label>Password</label></td>
									<td><input type="password" name="password" class="txtField"></td>
									</tr>
									<tr>
									<td><label>Repeat Pass</label></td>
									<td><input type="password" name="password" class="txtField"></td>
									</tr>
									<tr>
									<td><label>Company Name</label></td>
									<td><input type="text" name="company" class="txtField"></td>
									</tr>
									<tr>
									<td><label>Address</label></td>
									<td><input type="text" name="address" class="txtField"></td>
									</tr>
									<tr>
									<td><label>City</label></td>
									<td><input type="text" name="city" class="txtField"></td>
									</tr>
									<tr>
									<td><label>Postal Code</label></td>
									<td><input type="text" name="pcode" class="txtField"></td>
									</tr>
									<td><label>Contact Number</label></td>
									<td><input type="text" name="tel" class="txtField"></td>
									</tr>
									</tr>
									<td><label>Email</label></td>
									<td><input type="text" name="email" class="txtField"></td>
									</tr>
									<tr>
									<td colspan="2"><input type="submit" name="submit" value="Register" class="btnSubmit"></td>
									</tr>
									</table>
									</div>
									</form>
										
									</li>
	 <!-- END REGISTRATION FORM -->
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
<!-- THREE COLUMN LAYOUT - COULD BE COULD FOR DEALING WITH THREE GROUPS OF DATA AT ONCE -->		
		<section class="features-list" id="dispatch">
			<div class="container">
				<div class="row">
					<?php
				$conn = mysql_connect("localhost","root","");
				mysql_select_db("whouse",$conn);
				$result = mysql_query("SELECT * FROM dispatch_request");
				$row= mysql_fetch_array($result);
			?>
										<h1>New Dispatch Requests are as follows</h1>
										<table width="500" cellpadding="10"><tr><th>Request ID</th><th>Client Id</th><th>Order Name</th><th>Storage Id</th><th>Qty</th><th>Action</tr>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				
							<tr>
								<td><?php echo $row["request_id"]; ?></td>
								<td><?php echo $row["client_id"]; ?></td>
								<td><?php echo $row["order_name"]; ?></td>
								<td><?php echo $row["storage_id"]; ?></td>
								<td><?php echo $row["qty"]; ?></td>
								<td><a href="dispatch_order.php?request_id=<?php echo $row["request_id"];?>">Dispatch</a></td>
								
							</tr>
				
<?php
$i++;
}
?>
	</table>
					<!--div class="col-md-12">
								
						<div class="col-md-4 feature-1 wp2">
							<div class="feature-icon">
								<i class="fa fa-desktop"></i>
							</div>
							<div class="feature-content">
								<h1>DO Everything Online</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
								
							</div>
						</div>
						<div class="col-md-4 feature-2 wp2 delay-05s">
							<div class="feature-icon">
								<i class="fa fa-flash"></i>
							</div>
							<div class="feature-content">
								<h1>Fast Instant Communication</h1>
								<p>Perfect if you run your own start-up, product or service. Boxify can showcase your business converting your visits to income.</p>
								
							</div>
						</div>
						<div class="col-md-4 feature-3 wp2 delay-1s">
							<div class="feature-icon">
								<i class="fa fa-heart"></i>
							</div>
							<div class="feature-content">
								<h1>Peace of Mind</h1>
								<p>As aways, download Boxify for free exclusively from Codrops. If you love Boxify and want to thank me, simply <a href="http://peterfinlan.com/">buy me a beer</a>. </p>
								
							</div>
						</div>

					</div-->
				</div>
			</div>
		</section>
		<section class="showcase">
			<div class="showcase-wrap">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
						<p> </p>
<!-- MOBILE DEVICE WOULD BE NICE IF YOURS WERE WORKING -->
							<!--div class="device wp3">
								<div class="device-content">
									<div class="showcase-slider">
										<ul class="slides" id="showcaseSlider">
											<li>
												<img src="img/screen1.jpg" alt="Device Content Image">
											</li>
											<li>
												<img src="img/screen2.jpg" alt="Device Content Image">
											</li>
											<li>
												<img src="img/screen3.jpg" alt="Device Content Image">
											</li>
										</ul>
									</div>
								</div>
							</div-->
						</div>
				
					</div>
				</div>
			</div>
		</section>

		<section class="screenshots-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
<!-- WHITE SPACE SECTION narrow in height-->					
						<h1>Storage Simplicity at your fingertips</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						<p><a href="#screenshots" class="arrow-btn">See the screenshots! <i class="fa fa-long-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</section>
		<section class="screenshots" id="screenshots">
			<div class="container-fluid">
				<div class="row">
					<ul class="grid">
						<li>
							<figure>
								<img src="img/01-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/01.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Optimised For Design</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/02-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/02.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>User Centric Design</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/03-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/03.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>I will make many backups</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/04-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/04.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>I will not learn a program language while developing</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="row">
					<ul class="grid">
						<li>
							<figure>
								<img src="img/05-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/05.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>I will never choose another warehouse problem again</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/06-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/06.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Warehouse Project</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/07-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/07.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Made with Love</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="img/08-screenshot.jpg" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="img/large/08.jpg" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Just for Informatics</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</section>
		
<!-- BEAUTIFUL BLUE SECTION, GOOD FOR A FOOTER -->		
		<section class="download" id="download">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wp4">
						<!--h1>Seen Enough?</h1>
						<a href="#" class="download-btn">Download! <i class="fa fa-download"></i></a-->
					</div>
				</div>
			</div>
		</section>
		
		<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="admin.php"><i class="fa fa-heart"></i>admin</a></li>
					<li><a href="employee.php"><i class="fa fa-flash"></i>Staff</a></li>
				</ul>
				
			</nav>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/min/toucheffects-min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/flickity.pkgd.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/min/scripts-min.js"></script>
		
	
	
	
	</script>
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>
	</body>
</html>
