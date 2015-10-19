<?php
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("whouse_man",$conn);
mysql_query("INSERT INTO client (id, company, name, surname, tel, email, address) VALUES ('" . $_POST["idno"] . "','" . $_POST["company"] . "','" . $_POST["name"] . "','" . $_POST["surname"] ."','" . $_POST["tel"] . "','" . $_POST["email"] . "','" . $_POST["address"] . "')");
$current_id = mysql_insert_id();
if(!empty($current_id)) {
$message = "New User Added Successfully";
}
}
?>
<html>
<head>
<title>Add New Client</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body id="page1">
<div class="main">
            <!--header -->
            <header>
                <div class="wrapper">
                    <h1><a href="index.html" id="logo"></a></h1>
                    <!--form id="search" method="post">
						<fieldset>
							<div class="bg"><input class="input" type="text" value="Search"  onblur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''" ></div>
						</fieldset>
					</form-->
                </div>
                <nav>
                    <!--ul id="menu">
                        <li><a href="index.php"><span>Home</span></a></li>
                        <li class="active"><a href="#"><span>Manage</span></a></li>
                        <!--li><a href="#"><span>Latest News</span></a></li-->
                        <li><a href="index.php"><span>Home</span></a></li>
                        <!--li><a href="insights.html"><span>Insights</span></a></li-->
                        <!--li><a href="#"><span>Join Us</span></a></li-->
                        <!--li class="last"><a href="#.html"><span>Dispatch</span></a></li>
                    </ul-->
                </nav>
            </header>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><!--a href="list_user.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a--></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New Client</td>
</tr>
<tr>
<td><label>ID Number</label></td>
<td><input type="text" name="idno" class="txtField"></td>
</tr>
<tr>
<td><label>Company</label></td>
<td><input type="password" name="password" class="txtField"></td>
</tr>
<tr>
<td><label>First Name</label></td>
<td><input type="text" name="name" class="txtField"></td>
</tr>
<td><label>Tel</label></td>
<td><input type="text" name="surname" class="txtField"></td>
</tr>
</tr>
<td><label>Email</label></td>
<td><input type="text" name="surname" class="txtField"></td>
</tr>
</tr>
<td><label>Address</label></td>
<td><input type="text" name="surname" class="txtField"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>