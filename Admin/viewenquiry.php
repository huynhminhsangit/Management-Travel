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


<?php $cn=mysqli_connect("localhost","root","","tourandtravel");?>



<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">




<form method="post">
<table border="0" width="90%" height="300px" align="center" class="tableshadow">
<tr><td class="toptd">View Enquiry</td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="0" align="center" width="95%">
<tr>
    <td style="font-size:15px; padding:5px; font-weight:bold;" >Id</td>
    <td style="font-size:15px; padding:5px; font-weight:bold; ">Package Code</td>
    <td style="font-size:15px; padding:5px; font-weight:bold;">Name</td>
    <td style="font-size:15px; padding:5px; font-weight:bold;">Gender</td>
    <td style="font-size:15px; padding:5px; font-weight:bold;">Mobile No.</td>
    <td style="font-size:15px; padding:5px; font-weight:bold;">Email</td>
    <td style="font-size:15px; padding:5px; font-weight:bold;">No. of Children</td>
    <td style="font-size:15px; padding:5px; font-weight:bold;">No. of Adults</td>
    <td style="font-size:15px; padding:5px; font-weight:bold;">Status Field</td>
</tr>


<?php

$s="select * from enquiry, package where enquiry.pack_id=package.pack_id";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{

	
		echo "<tr>
                <td style='padding:5px;'>".$data['enq_id']."</td>
                <td style=' padding:5px;'>".$data['pack_code']."</td>
                <td style=' padding:5px;'>".$data['enq_name']."</td>
                <td style=' padding:5px;'>".$data['enq_gender']."</td>
                <td style=' padding:5px;'>".$data['enq_mobileno']."</td>
                <td style=' padding:5px;'>".$data['enq_email']."</td>
                <td style=' padding:5px;'>".$data['enq_child']."</td>
                <td style=' padding:5px;'>".$data['enq_adults']."</td>
                <td style=' padding:5px;'>".$data['enq_status']."</td>
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