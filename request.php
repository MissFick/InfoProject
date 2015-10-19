<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("whouse",$conn);
$result = mysql_query("SELECT * FROM asset where idno='8503151120123'");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Request for Storage</title>

		<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="slidedeck.skin.css" media="screen" />
		
		<script type="text/javascript" src="slidedeck.jquery.lite.pack.js"></script>
	</head>
	<body>
	<h1> Storage Order Form </h1>
		<div id="slidedeck_frame">
			<dl class="slidedeck">
			<?php
				$conn = mysql_connect("localhost","root","");
				mysql_select_db("whouse",$conn);
				$result = mysql_query("SELECT * FROM storage where storage_id='1'");
				$row= mysql_fetch_array($result);
			?>
				<dt>Shelf House</dt>
				<dd>
				  <h1>Request for Shelf Storage</h1>
                    <form method="post">
						Number Of Storage Units Available<?php echo $row["available"]; ?>
						Number of Pallets in Total: <input type="text" name="pallets"><br/><br/>
						
						Number Of Days Required <input type="text" name="days"><br/>
						Arrival Date: <input type="text" name="from"><br/>
						Picking Date: <input type="text" name="to"><br/><br/>
						
						Total Cost of Shelf Storage : <input type="text" name="cost"><br/>
						Shelf Storage = R500  per unit per day <br/>
						<input type="submit" name="submit" value="Submit" class="btnSubmit">
					</form>
									
				</dd>
				<dt>Cold House</dt>
				<dd>
					<h1>Request for Cold Storage</h1>
                     <form>
						Number Of Cold Storage Units Required <input type="text" name="qty"><br/>
						Number of Pallets in Total: <input type="text" name="pallets"><br/><br/>
						
						Number Of Days Required <input type="text" name="days"><br/>
						Arrival Date: <input type="text" name="from"><br/>
						Picking Date: <input type="text" name="to"><br/><br/>
						
						Total Cost of Cold Storage : <input type="text" name="cost"><br/>
						Cold Storage = R1000  per unit per day <br/>
						<input type="submit" name="submit" value="Submit" class="btnSubmit">
					 </form>
				</dd>
				
				<dt>Hazard House</dt>
				<dd>
					<h1>Request for Hazardous Storage</h1>
                     <form><table border="0">
					 <tr>
						<td>Number Of Hazardous Storage Units Required </td><td><input type="text" name="qty"></td></tr>
						<tr><td>Number of Drums in Total: </td><td><input type=:"text" name="drums"></td></tr>
						
						<tr><td>Number Of Days Required </td><td><input type="text" name="days"></td></tr>
						<tr><td>Arrival Date: </td><td><input type="text" name="from"></td></tr>
						<tr><td>Picking Date: </td><td><input type="text" name="to"></td></tr>
						<tr><td>Total Cost of Hazardous Storage : </td><td><input type="text" name="cost"></td></tr>
						<table>
						Hazardous Storage = R2000  per unit per day <br/>
						<input type="submit" name="submit" value="Submit" class="btnSubmit" >
					 </form>
				</dd>
				
				<!--dt>Quotation</dt>
				<dd>Slide content</dd>
				
				<dt>Labour Broking</dt>
				<dd>Slide content</dd-->
			</dl>
		</div>
		<script type="text/javascript">
			$('.slidedeck').slidedeck();
		</script>
	    <!-- Help support SlideDeck! Place this noscript tag on your page when you deploy a SlideDeck to provide a link back! -->
		<noscript>
		    <!--p>Powered By <a href="http://www.slidedeck.com" title="Visit SlideDeck.com">SlideDeck</a></p-->
        </noscript>
	</body>
</html>