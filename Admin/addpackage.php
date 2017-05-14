<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title>Tour and Travel - Add Package</title>
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


<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">
    <form method="post" enctype="multipart/form-data">
        <table border="0" width="700px" height="450px" align="center" class="tableshadow">
            <tr>
                <td colspan="2" class="toptd">Add Package</td>
            </tr>
            <tr>
                <td class="lefttxt">Select Category</td>
                <td><select name="cat_id" required/><option value="">Select</option>

                    <?php
                    
                    $cn=makeconnection();
                    $s="select * from category";
                    $result=mysqli_query($cn,$s);
                    $r=mysqli_num_rows($result);
                    //echo $r;

                    while($data=mysqli_fetch_array($result))
                    {
                        if(isset($_POST["show"])&& $data[0]==$_POST["cat_id"])
                            {
                                    echo "<option value=$data[0] selected='selected'>$data[1]</option>";
                            }
                            else
                            {
                                echo "<option value=$data[0]>$data[1]</option>";
                            }
                    }



                    ?>

                </select>
                <input type="submit" value="Show" name="show" formnovalidate/>
                </td>
            </tr>
            <tr>
                <td class="lefttxt">Package Code</td>
                <td><input type="text" name="pack_code" required pattern="[a-zA-Z0-9]{3,50}" title"Please Enter Only Characters between 3 to 50 for Package Code" /></td>
            </tr>
            <tr>
                <td class="lefttxt">Package Name</td>
                <td><input type="text" name="pack_name" required pattern="[a-zA-Z0-9-_\. ]{3,50}" title"Please Enter Only Characters between 3 to 50 for Package Name" /></td>
            </tr>
            
            <tr>
                <td class="lefttxt">Select Subcategory</td>
                <td><select name="subcat_id" required/><option value="">Select</option>

                    <?php
                        $cn=makeconnection();
                        $s="select * from subcategory";
                        $result=mysqli_query($cn,$s);
                        $r=mysqli_num_rows($result);
                        //echo $r;

                        while($data=mysqli_fetch_array($result))
                        {
                            if(isset($_POST["show"]))
                            {
                                if($data[2]==$_POST["cat_id"])
                                {
                                    echo"<option value=$data[0] >$data[1]</option>";
                                }
                            }
                        }
                    ?>

                    </select>
                </td>
            <tr>
                <td class="lefttxt">Employee</td>
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
                                echo"<option value=$data[0] >$data[2]</option>";
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
                                echo"<option value=$data[0] >$data[1]</option>";
                            }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td class="lefttxt">Package Price</td><td><input type="number" name="pack_price" /></td>
            </tr>
            <tr>
                <td class="lefttxt">Upload Pic1</td><td><input type="file" name="pack_pic1" /></td>
            </tr>
            <tr>
                <td class="lefttxt">Upload Pic2</td><td><input type="file" name="pack_pic2" /></td>
            </tr>
            <tr>
                <td class="lefttxt">Upload Pic3</td><td><input type="file" name="pack_pic3" /></td>
            </tr>
            <tr>
                <td class="lefttxt">Details</td><td><textarea name="pack_detail"></textarea></td>
            </tr>
            <tr>
                <td class="lefttxt">Pack Seat</td><td><input type="number" name="pack_seat"></textarea></td>
            </tr>
            <tr>
                <td class="lefttxt">Pack Startday</td><td><input type="date" name="pack_startday"></td>
            </tr>
            <tr>
                <td class="lefttxt">Pack Finishday</td><td><input type="date" name="pack_finishday"></td>
            </tr>
            <tr>
                <td>&nbsp;</td><td ><input type="submit" value="SAVE" name="sbmt" /></td>
            </tr>
        </table>
    </form>
</div>


</div>
<?php include('bottom.php'); ?>

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
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["pack_pic1"]["tmp_name"]);
	if($check!==false) {
//		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "<script>alert('file is not an image.')</script>";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["pack_pic1"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["pack_pic1"]["tmp_name"], $target_file)){
			$f1=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	
	
	//pack_pic2
	$target_file = $target_dir.basename($_FILES["pack_pic2"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["pack_pic2"]["tmp_name"]);
	if($check!==false) {
//		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["pack_pic2"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["pack_pic2"]["tmp_name"], $target_file)){
			$f2=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	//pack_pic3
	$target_file = $target_dir.basename($_FILES["pack_pic3"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["pack_pic3"]["tmp_name"]);
	if($check!==false) {
//		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["pack_pic3"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["pack_pic3"]["tmp_name"], $target_file)){
			$f3=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	
		if($f1>0&& $f2>0&&$f3>0)
		{
	
	$s="insert into package(pack_code, pack_name, subcat_id, emp_id, hotel_id, pack_price, pack_pic1, pack_pic2, pack_pic3, pack_detail, pack_seat, pack_startday, pack_finishday) values('" . $_POST["pack_code"] ."','" . $_POST["pack_name"] ."','" . $_POST["subcat_id"] . "','" . $_POST["emp_id"] ."','" . $_POST["hotel_id"] . "','". $_POST["pack_price"] . "','" . basename($_FILES["pack_pic1"]["name"]) . "','" . basename($_FILES["pack_pic2"]["name"]) . "','" . basename($_FILES["pack_pic3"]["name"]) . "','" . $_POST["pack_detail"] ."','" . $_POST["pack_seat"] ."','" . $_POST["pack_startday"] ."','" . $_POST["pack_finishday"] ."')";
//	echo $s;
    mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
		}
	
		
}
?>

</body>
</html>


