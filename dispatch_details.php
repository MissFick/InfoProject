<?php
$id = $_POST['request_id'];
$client_id  = $_POST['client_id'];
$storage_id = $_POST['storage_id'];
$name = $_POST['order_name'];
$qty = $_POST['qty'];


$emp_id = $_POST['emp_id'];
$dispatch_qty = $_POST['dispatch_qty'];


$conn = mysql_connect("localhost","root","");
mysql_select_db("whouse",$conn);
$query = "INSERT INTO dispatch VALUES" . "($id, '$name', '$odate', '$from', '$to', '$qty', '$storage_id', '$client_id', '$emp_id', '$check_qty', NULL)";
$result = mysql_query($query);
		if (!$result) echo "INSERT failed: $query<br>" .
			$conn->error . "<br><br>";
?>
<html>
	<body>
		<img src="img/butterfly.png" alt="butterfly">
		<h2> Check In Complete </h2>
		<p> Check In Details are as Follows</p>
		<table>
			<tr><td>Request ID </td><td><?php echo $id ?></td></tr>
			<tr><td>Client ID</td><td><?php echo $client_id ?></td></tr>
			<tr><td>Order Name</td><td><?php echo $name ?></td></tr>
			<tr><td>Storage ID </td><td><?php echo $storage_id ?></td></tr>
			<tr><td>Dispatch Quantity</td><td><?php echo $qty ?></td></tr>
					
			<tr><td>Employee ID</td><td><?php echo $emp_id ?></td></tr>
			<tr><td>Units for Dispatch</td><td><?php echo $dispatch_qty ?></td></tr>
			
		</table>
		
		<a href="employee.php">Return To Home Page</a>
</body>
</html>