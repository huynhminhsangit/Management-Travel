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

<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="update employees set emp_name='" . $_POST["emp_name"] ."', emp_gender='" . $_POST["emp_gender"] ."',emp_addr='" . $_POST["emp_addr"] ."',emp_num='" . $_POST["emp_num"] ."' where emp_id='" . $_POST["t1"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
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
        <table border="0" width="500px" height="300px" align="center" class="tableshadow">
            <tr>
                <td colspan="2" class="toptd">Update Employees</td>
            </tr>
            <tr>
                <td class="lefttxt">Selected Employees Name</td>
                <td>
                    <select name="t1" required/><option value="">Select</option>
                    <?php
                        $cn=makeconnection();
                        $s="select * from employees";
                        $result=mysqli_query($cn,$s);
                        $r=mysqli_num_rows($result);
                        //echo $r;

                        while($data=mysqli_fetch_array($result))
                        {
                            if(isset($_POST["show"])&& $data[0]==$_POST["t1"])
                            {
                                echo"<option value=$data[0] selected>$data[2]</option>";
                            }
                            else
                            {
                                echo "<option value=$data[0]>$data[2]</option>";
                            }
                        }
                        mysqli_close($cn);
                    ?>

                    </select>
                <input type="submit" value="Show" name="show" formnovalidate/>
                    <?php
                    if(isset($_POST["show"]))
                    {
                        $cn=makeconnection();
                        $s="select * from employees where emp_id='" .$_POST["t1"] ."'";
                        $result=mysqli_query($cn,$s);
                        $r=mysqli_num_rows($result);
                        //echo $r;

                        $data=mysqli_fetch_array($result);
                        $emp_name=$data['emp_name'];
                        $emp_gender=$data['emp_gender'];
                        $emp_addr=$data['emp_addr'];
                        $emp_number=$data['emp_num'];                         
                        mysqli_close($cn);

                    }

                    ?>
                </td>
            </tr>
            <tr>
                <td class="lefttxt">Employees Name</td>
                <td>
                    <?php
                        if($emp_name != "")
                            echo "<input type='text'  name='emp_name' value='<?php echo $emp_name ?>' required pattern='[a-zA-z _]{3,50}' title'Please Enter Only Characters between 3 to 10 for Employees Name'/></td>";
                        else 
                            echo "<input type='text'  name='emp_name' value='' required pattern='[a-zA-z _]{3,50}' title'Please Enter Only Characters between 3 to 10 for Employees Name'/></td>";
                        
                    ?>
            </tr>
            <tr>
            <td class="lefttxt">Gender:</td>
            <td>
                <?php
                    if($emp_gender == "Male")
                        echo "<input type='radio' name='emp_gender' checked='checked'  />Male
                        <input type='radio' name='emp_gender'  />Female";
                    else if($emp_gender == "Female")      
                        echo "<input type='radio' name='emp_gender' />Male
                        <input type='radio' name='emp_gender' checked='checked'  />Female";
                    else 
                        echo "<input type='radio' name='emp_gender' />Male
                        <input type='radio' name='emp_gender'  />Female";
                ?>
            </td>
        </tr>
             <tr>
                <td class="lefttxt">Employees Address</td>
                <td><input type="text" name="emp_addr" value="<?php echo $emp_addr ?>" required pattern="[a-zA-z0-9]{3,20}" title"Please Enter Only Characters between 3 to 9 for Employees Address" /></td>
            </tr>
             <tr>
                <td class="lefttxt">Employees Number</td>
                <td><input type="text" name="emp_num" value="<?php echo $emp_number ?>" required pattern="[0-9_]{3,20}" title"Please Enter Only Characters between 3 to 9 for Employees Number" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td>
            </tr>
        </table>
    </form>
</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>



