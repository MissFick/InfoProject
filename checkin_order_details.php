<?php
$id = $_POST['Order_ID'];
$name = $_POST['Order_Name'];
$odate = $_POST['Order_date'];
$from = $_POST['Order_From'];
$to = $_POST['Order_To'];
$qty = $_POST['Order_Qty'];
$storage_id = $_POST['storage_id'];
$client_id  = $_POST['client_id'];
$emp_id = $_POST['emp_id'];
$check_qty = $_POST['check_qty'];


$conn = mysql_connect("localhost","root","");
mysql_select_db("whouse",$conn);
$query = "INSERT INTO stored_order VALUES" . "($id, '$name', '$odate', '$from', '$to', '$qty', '$storage_id', '$client_id', '$emp_id', '$check_qty', NULL)";
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
			<tr><td>Order ID </td><td><?php echo $id ?></td></tr>
			<tr><td>Order Name</td><td><?php echo $name ?></td></tr>
			<tr><td>Order Date</td><td><?php echo $odate ?></td></tr>
			<tr><td>Order From</td><td><?php echo $from ?></td></tr>
			<tr><td>Order To</td><td><?php echo $to ?></td></tr>
			<tr><td>Order Quantity</td><td><?php echo $qty ?></td></tr>
			<tr><td>Storage ID </td><td><?php echo $storage_id ?></td></tr>
			<tr><td>Client ID</td><td><?php echo $client_id ?></td></tr>
			<tr><td>Employee ID</td><td><?php echo $emp_id ?></td></tr>
			<tr><td>Units for Check In</td><td><?php echo $check_qty ?></td></tr>
			
		</table>
		
		<a href="employee.php">Return To Home Page</a>
</body>
</html>