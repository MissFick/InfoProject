<?php
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("whouse",$conn);

mysql_query("INSERT INTO user(name, surname, password, clientid, company, address, city, pcode, tel, email) VALUES ('" . $_POST["name"] . "','" . $_POST["surname"] . "','" . $_POST["password"] . "','" . $_POST["clientId"] ."','" . $_POST["addr"] . "','" . $_POST["city"] . "','" . $_POST["pcode"] . "','" . $_POST["tel"] . "','" . $_POST["email"] . "')");
$current_id = mysql_insert_id();
if(!empty($current_id)) {
$message = "New User Registered Successfully";
}
}
?>