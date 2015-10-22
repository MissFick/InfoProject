
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
		
		<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
		
		<script src="js/modernizr.custom.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jquery.fancybox.css" rel="stylesheet">
		<link href="css/flickity.css" rel="stylesheet" >
		<link href="css/animate.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/queries.css" rel="stylesheet">
		
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="dp/jquery.timepicker.css" />
		<link rel="stylesheet" type="text/css" href="dp/bootstrap-datepicker.css" />
		<script type="text/javascript" src="dp/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="dp/jquery.timepicker.js"></script>

		<script type="text/javascript" src="dp/datepair.js"></script>
<script>
    // initialize input widgets first

    $('#basic .date').datepicker({
        'format': 'm/d/yyyy',
        'autoclose': true
    });

    // initialize datepair
    var basic = document.getElementById('basic');
    var datepair = new Datepair(basic);
</script>
		<title>Request for Storage</title>
	</head>
	<body>
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- open/close -->
		<section class="screenshots" id="screenshots">
			<div class="container-fluid">
				<div class="row">
					<ul class="grid">
						
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
										<p>Reliable Storage</p>
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
										<p>Simplistic and Convenient</p>
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
										<p>Organised </p>
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
										<p>couldn't think of anything here</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
			
			<?php
				$conn = mysql_connect("localhost","root","");
				mysql_select_db("whouse",$conn);
				$result = mysql_query("SELECT * FROM invoice where invoice_id='" . $_GET["invoice_id"] . "'");
				$row= mysql_fetch_array($result);
			?>
			
			 <h1>Request for Dispatch</h1>
                    <form method="post" action="dispatch_request_details.php" class="elegant-aero" margin-left="20">
					<div style="width:600px; margin-left: 20px">
											<div align="right" style="padding-left: 5px; padding-bottom:5px; padding-top:-5px;"><!--a href="list_user.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a--></div>
											<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
											<tr class="tableheader">
											<td colspan="2">Dispatch Details</td>
											</tr>
									<tr>
									<td><label>ID</label></td>
									<td><input type="text" name="Order_ID" class="txtField" value="<?php echo $row['invoice_id']; ?>"></td>
									</tr>
									<tr>
									<td><label>Order Name</label></td>
									<td><input type="text" name="order_name" class="txtField" value="<?php echo $row['order_name']; ?>"></td>
									<tr>
									</tr>
									<td><label>Storage ID</label></td>
									<td><input type="text" name="storage_id" class="txtField" value="<?php echo $row['storage_id']; ?>"></td>
									</tr>
									<tr>
									<td><label>Your ID</label></td>
									<td><input type="text" name="client_id" class="txtField" value="<?php echo $row['client_id']; ?>"></td>
									</tr>
									<tr>
									<td><label>Quantity</label></td>
									<td><input type="text" name="qty" class="txtField" value="<?php echo $row['qty']; ?>"></td>
									</tr>
									<tr>
						
									
									<td colspan="2"><input type="submit" name="submit" value="Request" class="btnSubmit"></td>
									</tr>
									</table>
									</div>
									</form>
				
						
						
			
		</div>
		</section>
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

	</body>
</html>

