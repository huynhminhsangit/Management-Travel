<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title>Tour and Travel</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>


<?php $cn=mysqli_connect("localhost","root","","tourandtravel"); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into category(Cat_name) values('" . $_POST["t1"] ."')";
	mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
}
?>



<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="90%" height="800px" align="center" class="tableshadow">
<tr><td class="toptd">View Package</td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="0" align="center" width="100%" >
<tr><td style="font-size:15px; padding:5px; font-weight:bold;">ID</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Package Code</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Pack Name</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Employees Name</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Hotel Name</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Price</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Pic1</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Pic2</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Pic3</td></tr>

<?php

$s="SELECT package.*, emp_name, hotel_name FROM package, subcategory, employees, hotel WHERE package.subcat_id = subcategory.subcat_id and package.emp_id = employees.emp_id and package.hotel_id = hotel.hotel_id ORDER BY pack_id ASC";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr>
                <td style=' padding:5px;'>".$data['pack_id']."</td>
                <td style=' padding:5px;'>".$data['pack_code']."</td>
                <td style=' padding:5px;'>".$data['pack_name']."</td>
                <td style=' padding:5px;'>".$data['emp_name']."</td>
                <td style=' padding:5px;'>".$data['hotel_name']."</td>
                <td style=' padding:5px;'>".$data['pack_price']." USD</td>
                <td style=' padding:5px;'><IMG src='packimages/".$data['pack_pic1']."' style='height:50px; width=20px' /></td>
                <td style=' padding:5px;'><IMG src='packimages/".$data['pack_pic2']."' style='height:50px' width=50px /></td>
                <td style=' padding:5px;'><IMG src='packimages/".$data['pack_pic3']."' style='height:50px' width=50px /></td>
            </tr>";

}


?>

</table>
</td></tr></table>

</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>