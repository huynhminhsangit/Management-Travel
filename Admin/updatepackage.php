<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<title>Tour and Travel</title>
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
	$f1=0;
	$f2=0;
	$f3=0;
	
	$target_dir = "packimages/";
	//pack_pic1
	$target_file = $target_dir.basename($_FILES["pack_pic1"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	
	
	

		if(move_uploaded_file($_FILES["pack_pic1"]["tmp_name"], $target_file)){
			$f1=1;
	} 	

	
	//pack_pic2
	$target_file = $target_dir.basename($_FILES["pack_pic2"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
    
	if(move_uploaded_file($_FILES["pack_pic2"]["tmp_name"], $target_file)){
			$f2=1;
    }
	
	
	
	//pack_pic3
	$target_file = $target_dir.basename($_FILES["pack_pic3"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	
	if(move_uploaded_file($_FILES["pack_pic3"]["tmp_name"], $target_file)){
			$f3=1;
    }
	
	
	//check file size
	if($_FILES["pack_pic3"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	else{
		if(move_uploaded_file($_FILES["pack_pic3"]["tmp_name"], $target_file)){
			$f3=1;
	} 
	}
}
	 
?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	
	if (empty($_FILES['pack_pic1']['name'])) {
	
		$s="update package set pack_name='" . $_POST["pack_name"] ."', subcat_id='" . $_POST["subcat_id"] . "', emp_id='" . $_POST["emp_id"] . "', hotel_id='" . $_POST["hotel_id"] . "',pack_price='" . $_POST["pack_price"] . "',pack_pic1='" . $_POST["oldPic1"] . "', pack_pic2='" . $_POST["oldPic2"]. "', pack_pic3='" .$_POST["oldPic3"] . "', pack_detail='" . $_POST["pack_detail"] . "', pack_seat='" . $_POST["pack_seat"] . "',pack_startday='" . $_POST["pack_startday"] . "', pack_finishday='" . $_POST["pack_finishday"] . "' where pack_id='" . $_POST["pack_id"] . "'";
	
    }else
    {
	   $s="update package set pack_name='" . $_POST["pack_name"] ."',subcat_id='" . $_POST["subcat_id"] . "', emp_id='" . $_POST["emp_id"] . "', hotel_id='" . $_POST["hotel_id"] . "', pack_price='" . $_POST["pack_price"] . "', pack_pic1='" .  basename($_FILES["pack_pic1"]["name"]) . "', pack_pic2='" .  basename($_FILES["pack_pic2"]["name"]) . "', pack_pic3='" .  basename($_FILES["pack_pic3"]["name"]) . "', pack_detail='" . $_POST["pack_detail"] . "', pack_seat='" . $_POST["pack_seat"] . "',pack_startday='" . $_POST["pack_startday"] . "', pack_finishday='" . $_POST["pack_finishday"] . "' where pack_id='" . $_POST["pack_id"] . "'";
    }
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




<form method="post" enctype="multipart/form-data">
    <table border="0" width="600px" height="800px" align="center" class="tableshadow">
        <tr>
            <td colspan="2" class="toptd">Update Package</td>
        </tr>
        <tr>
            <td class="lefttxt">Select Package</td>
            <td>
                <select name="pack_id" required/><option value="">Select</option>

                <?php
                    $cn=makeconnection();
                    $s="select * from package";
                    $result=mysqli_query($cn,$s);
                    $r=mysqli_num_rows($result);
                    //echo $r;

                    while($data=mysqli_fetch_array($result))
                    {
                        if(isset($_POST["show"])&& $data[0]==$_POST["pack_id"])
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
                if(isset($_POST["show"]))
                {
                    $cn=makeconnection();
                    $s="select * from package where pack_id='" .$_POST["pack_id"] ."'";
                    $result=mysqli_query($cn,$s);
                    $r=mysqli_num_rows($result);
                    //echo $r;

                    $data=mysqli_fetch_array($result);
                    $pack_id=$data['pack_id'];
                    $pack_name=$data['pack_name'];
                    $subcat_id=$data['subcat_id'];
                    $employees_id=$data['emp_id'];
                    $hotel_id=$data['hotel_id'];
                    $pack_price=$data['pack_price'];
                    $Pic1=$data['pack_pic1'];
                    $Pic2=$data['pack_pic2'];
                    $Pic3=$data['pack_pic3'];
                    $pack_detail=$data['pack_detail'];
                    $pack_seat=$data['pack_seat'];
                    $pack_startday=$data['pack_startday'];
                    $pack_finishday=$data['pack_finishday'];

                    mysqli_close($cn);

                }   

            ?>

            </td>
        </tr>

        <tr>
            <td class="lefttxt">Package Name</td>
            <td>
                <input type="text"  value="<?php if(isset($_POST["show"])){ echo $pack_name ;} ?> " name="pack_name" required pattern="[a-zA-Z0-9-_\. ]{3,50}" title"Please Enter Only Characters between 1 to 50 for Package Name"/>
            </td>
        </tr>
        <tr>
            <td class="lefttxt">Select Subcategory</td>
            <td>
                <select name="subcat_id" required/><option value="">Select</option>

                <?php
                    // Show SubcategoryID
                    $cn=makeconnection();
                    $s="select * from subcategory";
                    $result=mysqli_query($cn,$s);
                    $r=mysqli_num_rows($result);
                    //echo $r;

                    while($data=mysqli_fetch_array($result))
                    {
                        if(isset($_POST["show"])&& $subcat_id==$data[0])
                        {

                            echo "<option value=$data[0] selected='selected' >$data[1]</option>";
                        }
                        else
                        {
                            echo "<option value=$data[0]>$data[1]</option>";

                        }
                    }
                    mysqli_close($cn);



                ?>

                </select>
            </td>
        </tr>
          <tr>
                <td class="lefttxt">Employees</td>
                <td>
                    <select name="emp_id" required/>
                        <option value="">Select</option>

                        <?php
                            $cn=makeconnection();
                            $s="select * from employees";
                            $result=mysqli_query($cn,$s);
                            $r=mysqli_num_rows($result);
                            //echo $r;

                            while($data=mysqli_fetch_array($result))
                            {
                                if(isset($_POST["show"])&& $employees_id==$data['emp_id'])
                                {
                                    echo "<option value=$data[0] selected='selected' >$data[2]</option>";
                                }
                                else
                                {
                                    echo "<option value=$data[0]>$data[2]</option>";

                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="lefttxt">Hotel</td>
                <td>
                    <select name="hotel_id" required/>
                        <option value="">Select</option>

                        <?php
                            $cn=makeconnection();
                            $s="select * from hotel";
                            $result=mysqli_query($cn,$s);
                            $r=mysqli_num_rows($result);
                            //echo $r;

                            while($data=mysqli_fetch_array($result))
                            {
                                 if(isset($_POST["show"])&& $hotel_id==$data['hotel_id'])
                                {
                                    echo "<option value=$data[0] selected='selected' >$data[1]</option>";
                                }
                                else
                                {
                                    echo "<option value=$data[0]>$data[1]</option>";

                                }
                            }
                        ?>

                    </select>
                </td>
            </tr>
        <tr>
            <td class="lefttxt">Package Price</td><td><input type="text" name="pack_price" value="<?php if(isset($_POST["show"])){ echo $pack_price ;} ?> " /></td>
        </tr>

        <tr>
            <td class="lefttxt">Old Pic</td>
            <td>
                <img src="packimages/<?php echo @$Pic1; ?>" width="150px" height="50px" />
                <input type="hidden" name="oldPic1" value="<?php if(isset($_POST["show"])) {echo $Pic1;} ?>" />
            </td>
        </tr>
        <tr>
            <td class="lefttxt">Upload Pic1</td>
            <td>
                <input type="file" name="pack_pic1"/></td>
        </tr>

        <tr>
            <td class="lefttxt">Old Pic</td>
            <td>
                <img src="packimages/<?php echo @$Pic2; ?>" width="150px" height="50px" />
                <input type="hidden" name="oldPic2" value="<?php if(isset($_POST["show"])) {echo $Pic2;} ?>" />
            </td>
        </tr>
        <tr>
            <td class="lefttxt">Upload Pic2</td>
            <td><input type="file" name="pack_pic2"/></td>
        </tr>

        <tr>
            <td class="lefttxt">Old Pic</td>
            <td>
                <img src="packimages/<?php echo @$Pic3; ?>" width="150px" height="50px" />
                <input type="hidden" name="oldPic3" value="<?php if(isset($_POST["show"])) {echo $Pic3;} ?>" />
            </td>
        </tr>
        <tr>
            <td class="lefttxt">Upload Pic3</td>
            <td><input type="file" name="pack_pic3"/></td>
        </tr>

        <tr>
            <td class="lefttxt">Details</td>
            <td>
                <textarea name="pack_detail" />
                    <?php if(isset($_POST["show"])){ echo $pack_detail ;} ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td class="lefttxt">Pack seat</td>
            <td>
                <input type="number" name="pack_seat" 
                 value="<?php if(isset($_POST["show"])){ echo $pack_seat ;} ?>"
                />
            </td>
        </tr>
        <tr>
            <td class="lefttxt">Pack Start Day</td>
            <td>
                <input type="date" name="pack_startday" 
                   value="<?php if(isset($_POST["show"])){ echo $pack_startday;} ?>"
                />
            </td>
        </tr>
        <tr>
            <td class="lefttxt">Pack Finish Day</td>
            <td>
                <input type="date" name="pack_finishday" 
                    value="<?php if(isset($_POST["show"])){ echo $pack_finishday;} ?>"
                />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td ><button class="btn btn-success" type="submit" name="sbmt" />Update</td>
        </tr>
    </table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>


