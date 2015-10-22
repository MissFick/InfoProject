<?php
if(count($_POST)>0) {

$conn = mysql_connect("localhost","root","");
mysql_select_db("whouse",$conn);
mysql_query("INSERT INTO neworder (Order_ID, Order_Name, Order_Date, Order_From, Order_To, Order_Qty, storage_id, client_id) VALUES ('', '" . $_POST["order_name"] . "','" . $_POST["order_from"] . "','" . $_POST["order_to"] . "','" . $_POST["order_qty"] ."','" . $_POST["unit_price"] . "','" . $_POST["email"] . "','" . $_POST["address"] . "')");
$current_id = mysql_insert_id();
if(!empty($current_id)) {
$message = "New User Added Successfully";
}
}
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
		
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="slidedeck.skin.css" media="screen" />
		
		<script type="text/javascript" src="slidedeck.jquery.lite.pack.js"></script>
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
				$result = mysql_query("SELECT * FROM storage where storage_Id='3'");
				$row= mysql_fetch_array($result);
			?>
				  <h1>Request for Shelf Storage</h1>
                    <form method="post" action="invoice.php" class="elegant-aero" margin-left="20">
					<table width="500" >
						<tr><td><label>Number Of Storage Units Available</label></td><td> <?php echo $row["available"]; ?></td></tr>
						<tr><td><label>Number of Units in Required:</label></td><td> <input type="text" name="order_qty"></td></tr>
						<tr><td><label>Order Name:</label></td><td> <input type="text" name="order_name" ></td></tr>
						<tr><td><label>Date From </label></td><td><input type="text" name="order_from" /></td></tr>
						<tr><td><label>Date To</label></td><td><input type="text" name="order_to" /></td></tr>
						<!--tr><td><label>Date From </label></td><td><input type="text" name="order_from" class="date .start" id="basic"/></td></tr>
						<tr><td><label>Date To</label></td><td><input type="text" name="order_to" class="date .end" id="basic"/></td></tr-->
												
						<tr><td><label>Cost of Hazardous Storage :</label></td><td>R <?php echo $row["price"]; ?></td></tr>
						</table>
						<tr><td><label>Hazardous Storage Price = per unit per day <br/>
						<input type="hidden" name="storage_cost" id="storage_cost" value="<?php echo $row["price"]; ?>"><br/>
						<input type="hidden" name="storage_id" id="storage_id" value="1"><br/>
						<input type="hidden" name="client_id" id="client_id" value="2">
						<input type="submit" name="submit" value="Submit" class="btnSubmit">
						
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

