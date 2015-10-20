<?php
$name = $_POST['order_name'];
$qty = $_POST['order_qty'];
$from = $_POST['order_from'];
$to =$_POST['order_to'];
$days = $to - $from;
$storage_id = $_POST['storage_id'];
$client_id  = $_POST['client_id'];
$cost = $_POST['storage_cost'];
$date = date();
$total = $qty * $cost * $days;
$avail = $_POST['available'];
$newavail = $avail - $qty;

$conn = mysql_connect("localhost","root","");
mysql_select_db("whouse",$conn);
mysql_query("INSERT into invoice (order_name, storage_id, client_id, qty, from, to, days, total) VALUES ($name, $storage_id, $client_id, $qty, $from, $to, $days, $total);");
?>
<html>
	<body>
		<img src="img/butterfly.png" alt="butterfly">
		<h2> Thank you for your order </h2>
		<p> Your Order Details are as Follows</p>
		<table>
			<tr><td>Order Name</td><td><?php echo $name ?></td></tr>
			<tr><td>Storage ID </td><td><?php echo $storage_id ?></td></tr>
			<tr><td>Units Ordered</td><td><?php echo $qty ?></td></tr>
			<tr><td>Requested From </td><td><?php echo $from ?></td></tr>
			<tr><td>Requested Until </td><td><?php echo $to ?></td></tr>
			<tr><td>Number of Days </td><td><?php echo $days ?></td></tr>
			<tr><td>Total for this Invoice </td><td>R <?php echo $total ?></td></tr>
		</table>
		
		<a href="neworder.php">Return To Home Page</a>
</body>
</html>

<?php
$result = mysql_query("SELECT * FROM client where client_id='$client_id'");
while($row= mysql_fetch_assoc($result)){
$client_name= $row["c_name"];
$recipient= $row["client_email"];
}

     /*   $mail_body .= "<h2> Your Invoice </h2>";
        $mail_body .= "<h3>Order Name </h3>";
        $mail_body .= $name;
        $mail_body .= " <br/>";
        $mail_body .= "<h3> Order Quantity </h3>";
        $mail_body .= $qty;
        $mail_body .= " <br/>";
        $mail_body .= "<h3>Storage Type </h3>";
        $mail_body .= $email;
        $mail_body .= "<br/>";
        $mail_body .= "<h3>Order From </h3>";
        $mail_body .= $from;
		$mail_body .= "<br/>";
		$mail_body .= "<h3> Order To </h3>";
		$mail_body .= $to;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $headers .= "From: Synergy Warehouse Website >" . "\r\n";

/*	$send_form = mail($recipient,$subject,$mail_body,$headers);*/
        

?>