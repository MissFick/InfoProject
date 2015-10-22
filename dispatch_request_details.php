<?php
$name = $_POST['order_name'];
$qty = $_POST['qty'];
$storage_id = $_POST['storage_id'];
$client_id  = $_POST['client_id'];


$conn = mysql_connect("localhost","root","");
mysql_select_db("whouse",$conn);
$query = "INSERT INTO dispatch_request VALUES" . "(NULL, '$name', '$storage_id', '$client_id', '$qty')";
$result = mysql_query($query);
		if (!$result) echo "INSERT failed: $query<br>" .
			$conn->error . "<br><br>";
?>
<html>
	<body>
		<img src="img/butterfly.png" alt="butterfly">
		<h2> Thank you for request </h2>
		<p> We have received your request for dispatch</p>
		<p> Details are as Follows</p>
		<table>
			<tr><td>Order Name</td><td><?php echo $name ?></td></tr>
			<tr><td>Storage ID </td><td><?php echo $storage_id ?></td></tr>
			<tr><td>Units for Dispatch</td><td><?php echo $qty ?></td></tr>
			
		</table>
		
		<a href="employee.php">Return To Home Page</a>
</body>
</html>