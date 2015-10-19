<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("whouse_man",$conn);
$result = mysql_query("SELECT * FROM neworder");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ORDERS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>
        <script type="text/javascript" src="js/Vegur_300.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script>
        <!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
		<![endif]-->
        <!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
			</div>
		<![endif]-->
    </head>
    <body id="page3">
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
                    <ul id="menu">
                        <li><a href="index.php"><span>Home</span></a></li>
                        <li class="active"><a href="#"><span>MANAGE</span></a></li>
                        <li><a href="#"><span>Receiving</span></a></li>
                        <li><a href="#"><span>Dispatch</span></a></li>
                        
                    </ul>
                </nav>
            </header>
            <!--header end-->
            <!--content -->
            <article id="content">
                <div class="wrapper">
                    <div class="">
                        <h2>Orders</h2>
                        <div class="wrapper">
								<form name="frmUser" method="post" action="">
								<div style="width:1100px;">
								<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
								<!--div align="right" style="padding-bottom:5px;"><a href="add_user.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add User</a></div-->
								<table border="0" cellpadding="10" cellspacing="1" width="900" class="tblListForm">
								<tr class="listheader">
									<td></td>
									<td>ORDER NO</td><td>CLIENT ID</td><td>STORAGE TYPE</td><td>UNITQTY</td><td>ARIVAL DATE</td><td>DAYS</td>
									
									<td>CRUD ACTION</td>
								</tr>
								<?php
									$i=0;
									while($row = mysql_fetch_array($result)) {
									if($i%2==0)
									$classname="evenRow";
									else
										$classname="oddRow";
								?>
								<tr class="<?php if(isset($classname)) echo $classname;?>">
								<td>
								<div class="wrapper">
									<span class="dropcap_1">CLIE</span>
										<!--p class="color1 no_pad">Client Details</p-->
								</div>
								</td>
								<td><p class="color1 no_pad">Order No:</p><?php echo $row["orderno"]; ?></td>
								<td><p class="color1 no_pad">Client Id</p><?php echo $row["clientid"]; ?></td>
								<td><p class="color1 no_pad">Storage_Type</p><?php echo $row["storage_type"]; ?></td>
								<td><p class="color1 no_pad">Arrival Date</p><?php echo $row["arrivaldate"]; ?></td>
								<td><p class="color1 no_pad">Days</p><?php echo $row["days"]; ?></td>
							<td>
							 <a href="edit_user.php?idno=<?php echo $row["idno"]; ?>" class="link">
							  <img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' />
							 </a>  
							 <a href="delete_user.php?idno=<?php echo $row["idno"]; ?>"  class="link">
							  <img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' />
							 </a>
							</td>
</tr>
<?php
$i++;
}
?>
								</table>
								</form>
                               
                    </div>
                </div>
            </article>
			                             
        </div>
        
        
        <script type="text/javascript"> Cufon.now(); </script>
    </body>
</html>