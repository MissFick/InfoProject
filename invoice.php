<?php
$name = $_POST['order_name'];
$qty = $_POST['order_qty'];
$from = $_POST['order_from'];
$to =$_POST['order_to'];
$storage_id = $_POST['storage_id'];
$client_id  = $_POST['client_id'];
$cost = $_POST['storage_cost'];
$date = date();
$total = $qty * $cost;

$sql = " "

$conn = mysql_connect("localhost","root","");
mysql_select_db("warehouse",$conn);
mysql_query("INSERT into storage_order (order_name, order_date, order_from, order_to, order_qty, storage_id, client_id, order_total) VALUES ('$name', '$date', '$from', '$to', '$storage_id', '$client_id', '$total')";
?>

<?php
$result = mysql_query("SELECT * FROM client where client_id='$client_id'");
while($row= mysql_fetch_assoc($result)){
$recipient= $row["client_email"];

        $mail_body .= "<h2> Your Invoice </h2>";
        $mail_body .= "<h3>Order Name </h3>";
        $mail_body .= $name;
        $mail_body .= " <br/>";
        $mail_body .= "<h3> Visitor Contact Number </h3>";
        $mail_body .= $contactno;
        $mail_body .= " <br/>";
        $mail_body .= "<h3>Visitor Email: </h3>";
        $mail_body .= $email;
        $mail_body .= "<br/>";
        $mail_body .= "<h3>Visitor Message: </h3>";
        $mail_body .= $message;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $headers .= "From: Synergy CA Website <info@synergycaglobal.come>" . "\r\n";

	$send_form = mail($recipient,$subject,$mail_body,$headers);
        header("Location: neworder.php"); 

?>