<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php $cn=mysqli_connect("localhost","root","","tourandtravel");?>
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto"  >

<div style="width:200px; font-size:18px; color:#09F; float:left">

<table cellpadding="0" cellspacing="0" width="1000px" >
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
<table cellpadding="0px" cellspacing="0" width="1000px" >
<tr><td class="headingText">View Packages</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px" border="0">
<tr>
    <td>
        <table border="0" width="600px" height="400px" align="center" >
    <?php

        $s="select * from package, category, subcategory, employees where employees.emp_id= package.emp_id and package.subcat_id=subcategory.subcat_id and package.pack_id='" . $_GET["pid"] ."'";
        $result=mysqli_query($cn,$s);
        //$r=mysqli_num_rows($result);
        //$n=0;

        $data=mysqli_fetch_array($result);
        $seat = $data['pack_seat'] - $data['pack_set'];
        mysqli_close($cn);
    ?>
        <tr>
            <td colspan="3"><span class="middletext">Pack Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $data['pack_name'];?></strong></td>
        </tr>
        <tr>
            <td class="middletext"><img src="Admin/packimages/<?php echo $data['pack_pic1'];?>" width="200px" height="200px"  /></td>

            <td class="middletext" style="padding-left:15px"><img src="Admin/packimages/<?php echo $data['pack_pic2'];?>" width="200px" height="200px"  /></td>

            <td class="middletext" style="padding-left:15px"><img src="Admin/packimages/<?php echo $data['pack_pic3'];?>" width="200px" height="200px"  /></td>
        </tr>
        <tr>
            <td>
              <span class="middletext">Start Date:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong style="color: red"><?php echo $data['pack_startday'];?></strong><br/>
              <span class="middletext">Finish Date:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong style="color: red"><?php echo $data['pack_finishday'];?></strong><br/>
                <span class="middletext">Price:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong style="color: red"><?php echo $data['pack_price'];?> USD<br/></strong>
              <span class="middletext">Seat Left:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php 
                    if($seat != 0)
                        echo "<strong style='color: red'>".$seat."/".$data['pack_seat']." seat</strong>";
                    else
                        echo "<span class='label label-danger''>OUT OF SEAT<span>";
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="3"><strong>TOUR GUIDE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['emp_name'];?></strong></td>
        </tr>
        <tr>
            <td colspan="3"><strong>Hotel:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Updating....</strong></td>
        </tr> 
        <tr>
            <td colspan="3"><p><?php echo $data['pack_detail'];?></p></td>
        </tr>
        <tr>
            <td align="left" colspan="3" height="50px">
                <a href="enquiry.php?pid=<?php echo $data[0];   ?>">
                <?php 
                    if($seat > 0)
                        echo "<button class='btn btn-success' name='sbmt' />Enquiry</button>";
                    else   
                        echo "<button class='btn btn-success' name='sbmt' disabled='disabled' />Enquiry</button>";                 
                ?>
            </td>
        </tr>
    </table>
    </td>
</tr>
</table>
</td></tr>
</table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>



