<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title>Tour and Travel - Add Employees</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
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
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into employees(emp_code, emp_name, emp_gender, emp_addr, emp_num) values('" . $_POST["emp_code"] ."', '" . $_POST["emp_name"] ."', '" . $_POST["emp_gender"] ."', '" . $_POST["emp_addr"] ."', '" . $_POST["emp_num"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
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
        <table border="0" width="400px" height="200px" align="center" class="tableshadow">
        <tr>
            <td colspan="2" class="toptd">Add Employees</td>
        </tr>
        <tr>
            <td class="lefttxt">Employees Code</td>
            <td><input type="text" name="emp_code" required pattern="[a-zA-z _]{1,20}" title"Please Enter Only Characters between 0 to 9 for Employees Code" /></td>
        </tr>
         <tr>
            <td class="lefttxt">Employees Name</td>
            <td><input type="text" name="emp_name" required pattern="[a-zA-z _]{3,20}" title"Please Enter Only Characters between 3 to 9 for Employees Name" /></td>
        </tr>
         <tr>
            <td class="lefttxt">Gender:</td>
            <td>
                <input type="radio" name="emp_gender" value="Male" checked="checked" />Male
                <input type="radio" name="emp_gender"  value="Female"/>Female
            </td>
        </tr>
         <tr>
            <td class="lefttxt">Employees Address</td>
            <td><input type="text" name="emp_addr" required pattern="[a-zA-z0-9]{3,20}" title"Please Enter Only Characters between 3 to 9 for Employees Address" /></td>
        </tr>
         <tr>
            <td class="lefttxt">Employees Number</td>
            <td><input type="text" name="emp_num" required pattern="[0-9_]{3,20}" title"Please Enter Only Characters between 3 to 9 for Employees Number" /></td>
        </tr>
            
        <tr>
            <td>&nbsp;</td><td ><button class="btn btn-submit" type="submit" name="sbmt" />SAVE</button></td>
        </tr>
        </table>
    </form>
</div>
</div>
<?php include('bottom.php'); ?>
</body>
</html>