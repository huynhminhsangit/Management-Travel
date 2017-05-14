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
	$s="delete from advertisement  where adv_id='" . $_POST["adv_id"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Delete');</script>";
    }
?>



<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">
    <form method="post" enctype="multipart/form-data">
        <table border="0" width="400px" height="300px" align="center" class="tableshadow">
            <tr>
                <td colspan="2" class="toptd">Delete Advertisement</td>
            </tr>
            <tr>
                <td class="lefttxt">Select Title</td>
                <td>
                    <select name="adv_id" required/><option value="">Select</option>
                    
                    
                    <?php
                        // Show adv_title
                        $cn=makeconnection();
                        $s="select * from advertisement";
                        $result=mysqli_query($cn,$s);
                        $r=mysqli_num_rows($result);
                        //echo $r;

                        while($data=mysqli_fetch_array($result))
                        {
                            if(isset($_POST["show"])&& $data[0]==$_POST["adv_id"])
                            {
                                echo"<option value=$data[0] selected>$data[1]</option>";
                            }
                            else
                            {
                                echo "<option value=$data[0]>$data[1]</option>";
                            }
                        }
                    mysqli_close($cn);
                    ?>

                    </select>
                    <input type="submit" value="Show" name="show" formnovalidate/>
                    
                    <?php
                        // Show information adv
                        if(isset($_POST["show"]))
                        {
                        $cn=makeconnection();
                        $s="select * from advertisement where adv_id='" .$_POST["adv_id"] ."'";
                        $result=mysqli_query($cn,$s);
                        $r=mysqli_num_rows($result);
                        //echo $r;

                        $data=mysqli_fetch_array($result);
                        $Advid=$data[0];
                        $Title=$data[1];
                        $Companyname=$data[2];
                        $Pic=$data[3];


                        mysqli_close($cn);

                        }

                    ?>

                    </td>
            </tr>
            <tr>
                <td class="lefttxt">Company Name</td>
                <td>
                    <input type="text"  value="<?php if(isset($_POST["show"])){ echo $Companyname ;} ?> " name="t2" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for Company Name"/>
                </td>
            </tr>

            <tr>
                <td class="lefttxt">Pic</td>
                <td><img src="addverimages/<?php echo @$Pic; ?>" width="150px" height="100px" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td ><button class="btn btn-danger" type="submit"  name="sbmt" />Delete</button></td>
            </tr>




    </table>
    </form>
</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>


