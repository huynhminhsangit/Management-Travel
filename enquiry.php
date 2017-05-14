<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enquiry</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php $cn=mysqli_connect("localhost","root","","tourandtravel");?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=mysqli_connect("localhost","root","","tourandtravel");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	else
    {
        
        $s="select package.* from package, category, subcategory where  package.subcat_id=subcategory.subcat_id and package.pack_id='" . $_REQUEST["pid"] ."'";
        $result=mysqli_query($cn,$s);
        //$r=mysqli_num_rows($result);
        //$n=0;

        $data=mysqli_fetch_array($result);
        $seatLeft = $data['pack_seat'] - $data['pack_set'];
        $seatEnquiry = $_POST["childs"] + $_POST["adults"];
        //Em muốn xử lý khi nào mà khách đặt tour quá số lượng ghế mà tour đó có thì báo lỗi, bắt nó đặt lại.
//        echo $seatLeft."<br/>".$seatEnquiry;
        if($seatEnquiry > $seatLeft){
            echo "<script>alert('This tour is empty ".$seatLeft." seat! Please try again!');</script>"; // Lỗi ở dòng này nha đại ca.
        }
        else
        {
            
            /* Insert table Enquiry */
            $s="insert into enquiry(pack_id, enq_name, enq_gender, enq_mobileno, enq_email, enq_child, enq_adults, enq_message, enq_status) values('" . $_REQUEST["pid"] ."','" . $_POST["name"] ."','" . $_POST["gender"] ."','" . $_POST["phoneNumber"] ."','" . $_POST["email"] ."','" . $_POST["childs"] ."','" . $_POST["adults"] ."','" . $_POST["message"] ."','Pending')";
            mysqli_query($cn,$s);

            /* Select pack_set*/
            $select2="select pack_code, pack_set, pack_price, pack_name from package,category,subcategory where package.subcat_id=subcategory.subcat_id and package.pack_id='" . $_REQUEST["pid"] ."'";
            $result=mysqli_query($cn,$select2);

            $data=mysqli_fetch_array($result);        
            $totalSet =0;
            $totalSet =$data['pack_set'] + $_POST["childs"] + $_POST["adults"]; // Sum total people set
    //        echo $totalSet;

            /* Update pack_set for table Package */
            $update = "Update package set pack_set = '".$totalSet."' where pack_id = '". $_REQUEST["pid"] ."'";
    //        echo $update;
            mysqli_query($cn,$update);

            /* Send Mail */
            require 'lib/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            $totalPayment = $seatEnquiry*$data["pack_price"];
            //$mail->SMTPDebug = 3;                                 // Enable verbose debug output

            $mail->isSMTP();                                        // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                                 // Enable SMTP authentication
            $mail->Username = 'huynhminhsangcntp@gmail.com';        // SMTP username
            $mail->Password = '01678790900';                        // SMTP password
            $mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('huynhminhsangcntp@gmail.com', 'Mailer');
            $mail->addAddress($_POST["email"], $_POST["name"]);     // Add a recipient
            $mail->addReplyTo('huynhminhsangcntp@gmail.com', 'FEEDBACK');
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'BOOKED SUCCESS';
            $mail->Body    = 'Dear '.$_POST["name"].',<p>
            We receipted your requirement about tour name: '.$data["pack_name"].' with code: '.$data["pack_code"].'.<br/>
            You booked for '.$_POST["childs"].' child and '.$_POST["adults"].' adults.<br/>
            You will pay '.$totalPayment.' USD/'.$seatEnquiry.' people.<br/>
            We will send you a contract after 2 working days.
            Thank you!';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo "<script>alert('Message could not be sent.');</script>";
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo "<script>alert('Please check your email!');</script>";
                header("location:index.php");
            }
            
        }
    }
}
?>

<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto"  >

    <div style="width:200px; font-size:18px; color:#09F; float:left">

        <table cellpadding="0" cellspacing="0" width="1000px">
            <tr><td style="font-size:18px" color="#09F">Category</td></tr>
            <?php

            $s="select * from category";
            $result=mysqli_query($cn,$s);
            $r=mysqli_num_rows($result);
            //echo $r;

            while($data=mysqli_fetch_array($result))
            {

                    echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

            }
            ?>
        </table>

    </div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
    <tr><td class="headingText">Enquiry</td></tr>
    <tr><td class="paraText" width="900px"></td>
        <table cellpadding="0" cellspacing="0" width="900px">
        <td>
            <table border="0"; width="600px" height="400px" align="center" >
                <?php

                $s="select pack_id, pack_code, pack_name, pack_price, pack_seat, pack_set from package, subcategory where package.subcat_id=subcategory.subcat_id and package.pack_id='" . $_GET["pid"] ."'";

                $result=mysqli_query($cn,$s);
                $r=mysqli_num_rows($result);
                //echo $r;
                $n=0;
                $data=mysqli_fetch_array($result);
                mysqli_close($cn);
                ?>
                <form method="post" enctype="multipart/form-data">
                <tr>
                    <td colspan="3" class="middletext">Pack Name:&nbsp;&nbsp;&nbsp;<?php echo $data['pack_name'];?></td>
                </tr>    
                <tr>
                    <td colspan="3" class="middletext">Package Code:&nbsp;&nbsp;&nbsp;<?php echo $data['pack_code'];?></td>
                </tr>
                <tr>
                    <td colspan="3" class="middletext">Booked:&nbsp;&nbsp;&nbsp;<?php echo $data['pack_set']."/".$data['pack_seat'];?> seat</td>
                </tr>
                <tr>
                    <td colspan="3" class="middletext">Price:&nbsp;&nbsp;&nbsp;<?php echo $data['pack_price'];?> USD</td>
                </tr>    
                <tr>
                    <td class="lefttxt">Name:</td><td><input type="text" class="form-control" placeholder="Name " name="name" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"/></td>
                </tr>
                <tr>
                    <td class="lefttxt">Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="Male" checked="checked" />Male
                        <input type="radio" name="gender"  value="Female"/>Female
                    </td>
                </tr>
                <tr>
                    <td class="lefttxt">Mobile No.</td><td><input type="text" placeholder="Phone Number" class="form-control" name="phoneNumber" required pattern="[0-9]{10,12}" title"Please Enter Only numbers between 10 to 12 for Mobile No"/></td>
                </tr>
                <tr>
                    <td class="lefttxt">Email:</td>
                    <td><input type="email" placeholder="Email" class="form-control" class="form-control" name="email" required /></td>
                </tr>
                <tr>
                    <td class="lefttxt">No.of Children:</td>
                    <td>
                        <input type="number" class="form-control"  name="childs" required pattern="[1 _]{1,10}" title"Please Enter Only numbers between 1 to 10 for Children"/>
                    </td>
                </tr>
                <tr>
                    <td class="lefttxt">No.of Adults:</td>
                    <td>
                        <input type="number" class="form-control"  name="adults" required pattern="[1_]{1,2}" title"Please Enter Only numbers between 1 to 20 for No.Of Adults"/>
                    </td>
                </tr>
                <tr>
                    <td class="lefttxt">Enquiry Message:</td>
                    <td><textarea name="message" placeholder="Message" class="form-control"/></textarea></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td ><button class="btn btn-success" name="sbmt" />Submit</button></td>
                </tr>

                </form></tr>
            </table>
        </td>
        </table>
    </tr>
</table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>

