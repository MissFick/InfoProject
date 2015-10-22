<?php
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);

	
	if (isset($_POST['delete'] && isset($_POST['invoice_id']))
	{
		$invoice_id = get_post($conn, 'invoice_id');
		$query = "DELETE FROM invoice WHERE invoice_id='$invoice'";
		$result = $conn->query($query);
		if (!result) echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";
		
	}
	if (
	(isset($_POST['order_name'])) &&
	(isset($_POST['storage_id'])) &&
	(isset($_POST['client_id'])) &&
	(isset($_POST['qty'])) &&
	(isset($_POST['from'])) &&
	(isset($_POST['to'])) &&
	(isset($_POST['days'])) &&
	(isset($_POST['total'])) &&
	(isset($_POST['date'])))
	{
		$order_name = get_post($conn, 'order_name');
		$storage_id = get_post($conn, 'storage_id');
		$client_id = get_post($conn, 'client_id');
		$qty = get_post($conn, 'qty');
		$from = get_post($conn, 'from');
		$to = get_post($conn, 'to');
		$days = get_post($conn, 'days');
		$total = get_post($conn, 'total');
		$date = get_post($conn, 'date');
		$query = "INSERT INTO invoice VALUES" . "('$order_name', '$storage_id', '$client_id', '$qty', '$from', '$to', '$days', '$total', '$date')";
		$result = $conn->query($query);
		if (!$result) echo "INSERT failed: $query<br>" .
			$conn->error . "<br><br>";
		}
	echo <<<_END
		<form action="invoice_test.php" method="post">
		<pre>
			Order Name <input type="text" name="order_name">
			storage_id <input type="text" name="storage_id">
			client_id <input type="text" name="client_id">
			Quantity <input type="text" name="qty">
			From <input type="text" name="from">
			To <input type="text" name="to">
			Days <input type="text" name="days">
			Total <input type="text" name="total">
			Date <input type="text" name="date">
			<input type="submit" value="ADD RECORD">
		</pre>
		</form>
	_END;
	
	$query = "SELECT * FROM invoice";
	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	$rows = $result->num_rows;
	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
		echo <<<_END
			<pre>
				invoice_id $row[0]
				order_name $row[1]
				storage_id $row[2]
				client_id $row[3]
				qty $row[4]
				from $row[5]
				to $row[6]
				days $row[7]
				total $row[8]
				date $row[9]
			</pre>
			<form action="sqltest.php" method="post">
				<input type="hidden" name="delete" value="yes">
				<input type="hidden" name="invoice_id" value="$row[0]">
				<input type="submit" value="DELETE RECORD">
			</form>
		_END;
	}
	$result->close();
	$conn->close();
	function get_post($conn, $var)
	{
		return $conn->real_escape_string($_POST[$var]);
	}
	
	
?>