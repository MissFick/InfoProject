<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("whouse",$conn);

$result = mysql_query("SELECT * FROM dispatch_request WHERE request_id='" . $_GET["request_id"] . "'");
$row = mysql_fetch_array($result);
?>
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
		<!--<script type="text/javascript">
		$(document).ready( function(){
			// Hide all Modal Boxes
			$('div.modal-box').hide();
			// Display appropriate box on click - adjust this as required for your website
			$('span.modal-link').click(function() {
				var modalBox = $(this).attr('rel');
				$('div'+modalBox).fadeIn('slow');
			});
			// Multiple ways to close a Modal Box
			$('span.modal-close').click(function() {
				$(this).parents('div.modal-box').fadeOut('slow');
			});
			$('span.dismiss').click(function() {
				$(this).parents('div.modal-box').fadeOut('slow');
			});
			$('span.save').click(function() {
				// **** If you need to save or submit information - add your appropriate ajax code here
				$(this).parents('div.modal-box').fadeOut('slow');
			});
		});-->
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
		
		<
		<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="slidedeck.skin.css" media="screen" />
		
		<script type="text/javascript" src="slidedeck.jquery.lite.pack.js"></script>
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
										
									
										<form name="frmUser" method="post" action="dispatch_details.php">
										<div style="width:600px; margin-left: 20px">
											<div align="right" style="padding-left: 5px; padding-bottom:5px; padding-top:-5px;"><!--a href="list_user.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a--></div>
											<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
											<tr class="tableheader">
											<td colspan="2">Dispatch Order </td>
											</tr>
									<tr>
									<td><label>Request ID</label></td>
									<td><input type="text" name="request_id" class="txtField" value="<?php echo $row['request_id']; ?>"></td>
									</tr>
									<tr>
									<td><label>Client ID</label></td>
									<td><input type="text" name="client_id" class="txtField" value="<?php echo $row['client_id']; ?>"></td>
									<tr>
									</tr>
									<td><label>Order Name</label></td>
									<td><input type="text" name="order_name" class="txtField" value="<?php echo $row['order_name']; ?>"></td>
									</tr>
									<tr>
									<td><label>Storage ID</label></td>
									<td><input type="text" name="storage_id" class="txtField" value="<?php echo $row['storage_id']; ?>"></td>
									</tr>
									<tr>
									<td><label>Dispatch Quantity</label></td>
									<td><input type="text" name="qty" class="txtField" value="<?php echo $row['qty']; ?>"></td>
									</tr>
									<tr>
									<td><label>Employee ID</label></td>
									<td><input type="text" name="emp_id" class="txtField" value=""></td>
									</tr>
									<tr>
									<td><label>Check Qty</label></td>
									<td><input type="text" name="dispatch_qty" class="txtField" value=""></td>
									</tr>
									<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
									</tr>
									</table>
									</div>
									</form>
										
									</li>
									
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="features-list" id="features">
			<div class="container">
				<div class="row">
					
			</div>
		</section>
		<section class="showcase">
			<div class="showcase-wrap">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="screenshots-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Storage Simplicity at your fingertips</h1>
						
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
										<p>Optimised For Informatics</p>
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
										<p>Responsive and Adaptive</p>
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
										<p>Courtesy of NCD</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="row">
					
				</div>
			</div>
		</section>
		<section class="download" id="download">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wp4">
						
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<!--div class="row">
					
				</div-->
			</div>
		</footer>
		<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="neworder.php"><i class="fa fa-heart"></i>admin</a></li>
					<li><a href="staff.php"><i class="fa fa-flash"></i>Staff</a></li>
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
