<?php 
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("warehouse",$conn);
$sql = "SELECT * FROM `client` WHERE `client_id` = \'8301236547896\' LIMIT 0, 30 ";
$result = mysql_query($sql);
$row= mysql_fetch_row($result);
?>
<html><body>
						<h1>Your details are as follows</h1>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
				<div>
								<p class="color1 no_pad">Order ID:</p><?php echo $row["client_id"]; ?>
								<p class="color1 no_pad">Client Name</p><?php echo $row["c_name"]; ?>
								<!--p class="color1 no_pad">Order_Date</p></*?php echo $row["order_date"]; ?>
								<p class="color1 no_pad">Order_From</p></*?php echo $row["order_from"]; ?>
								<p class="color1 no_pad">Order_To</p></*?php echo $row["order_to"]; ?>
								<p class="color1 no_pad">QUANTITY</p></*?php echo $row["order_qty"]; ?>
								<p class="color1 no_pad">STORAGE TYPE</p--></*?php echo $row["storage_id"] ?>
				</div>
<?php
$i++;
}
?>
</body>
</html>