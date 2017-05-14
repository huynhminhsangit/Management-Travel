<!DOCTYPE html>
<html>
<head>
    <title>Tour and Travel</title>
    <link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="icon.png" rel="shortcut icon" type="image/x-icon" />  
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
     //function hideURLbar(){ window.scrollTo(0,1); } 


     </script>
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
<!--connection-->
<?php include('function.php'); ?>
<!--header-->
<?php include('top.php'); ?>
<!--Slide-->
<?php include('slider.php'); ?>
<!--About-->
<div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Our Vision</h4>
			 <p>Tourism which is ethical, fair and a positive experience for both travellers and the people and places they visit</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Our Mission</h4>
			 <p>To ensure tourism always benefits local people by challenging bad practice and promoting better tourism</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Safety Information</h4>
			 <p>Vacation is a time to relax in safe surroundings.For emergency aid of any kind, call 911 from any phone... in your hotel, dial 9-911.</p>
             <div align="right"><a href="aboutus.php"><button class="btn btn-info" name="sbmt" />Read more</button></a></div> 
		 </div>
	 </div>
</div>
<!--Galery-->
<!--top-tours-->	
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>
		 
		  </div>
	      <ul id="filters" class="clearfix" data-wow-delay="0s">
			<li><span class="filter active" data-filter="app">ALL</span></li>
                 <?php 
					$cn=mysqli_connect("localhost","root","","tourandtravel");   
					$s="select * from category";
					$result=mysqli_query($cn,$s);
	
					while($data=mysqli_fetch_array($result))
					{
							echo "<li><span class='filter' data-filter='".$data['cat_id']."'>".$data['cat_name']."</span></li>";
					
					}
				?>
	        </ul>
	     <div id="portfoliolist">
              <?php
				$cn=mysqli_connect("localhost","root","","tourandtravel");           
				$s="select * from package, subcategory, category where package.subcat_id = subcategory.subcat_id and subcategory.cat_id = category.cat_id";
				$result=mysqli_query($cn,$s);
				while($data=mysqli_fetch_array($result))
				{
			?>

	<div class="portfolio app <?php echo $data['cat_id']?> mix_all" style="display: inline-block; opacity: 1;">
	<div class="portfolio-wrapper" data-wow-delay="0s">		
							
	<div class="thumbnail" style="height:450px;">
      
      <div class="caption">
		<table>
			<tr>
				<td>
					<img src="Admin/packimages/<?php echo $data['subcat_pic'];?>" style="width:400px; height:200px;" />
				</td>
			</tr>
			<tr>
				<td><h4><strong style="color:#C03;"><?php echo $data['subcat_name'];?> - <?php echo $data['pack_code'];?></h4></strong></td>
			</tr>
            <tr>
            	<td>
                    <h4 style="color:#C03; padding-top:15px;">Booked:  <?php echo $data['pack_set'];?>/<?php echo $data['pack_seat'];?></h4>
                </td>
            </tr>
            <tr>
            	<td><h3 style="color:#C03; padding-top:15px;">Price:   <?php echo $data['pack_price']?>USD</h3></td>
            </tr>
            <tr>
				<td><?php echo substr($data['subcat_detail'],0,150)."...";?></td>
			</tr>
			<tr>
				<td>  <p  style="padding-top:15px;"> 
               		 <a href="detail.php?pid=<?php echo $data['pack_id'];   ?>" class="btn btn-info" role="button">View Details</a>
               		 </p>
                </td>
			</tr>
		</table>
      
      </div>
    </div>
							</div>
					</div>
   
            <?php
				}
			?>
					
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  
<!-- Script for gallery Here-->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		var filterList = {
		init: function () {
// MixItUp plugin
// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
	});				
},
		hoverEffect: function () {
// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
			$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
			$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	}
};
// Run the show!
		filterList.init();
	});	
</script>
<!--Gallery Script Ends-->	 
<!--/top-tours-->
<!--Advertisements-->
<div class="tour-guides section" id="section-4" >
	  <div class="tour-guides-head text-center">
		  <h3>Advertisements</h3>
		  <span></span><img src="images/guide.png" alt=""><span></span>
		  <div class="container">
				<p>My tour guides are expensive, so first decide what you want to do, whether it's a general tour of a city, a day of hiking, or visiting remote villages in a third-world country. Have a ball-park time allotment in mind, whether it's a half-day, a full-day, or a multi-day experience. Once you have chosen a guide, you'll probably refine your ideas based upon the guide's knowledge.</p>
		  </div>
	  </div>
	  <div class="container">
		<!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!-- //requried-jsfiles-for owl -->
		 <div id="owl-demo" class="owl-carousel">
         
         
         
         <?php
        $cn=mysqli_connect("localhost","root","","tourandtravel");           
        $s="select * from advertisement";
        $result=mysqli_query($cn,$s);

        $n=0;
        while($data=mysqli_fetch_array($result))
        {
            if($n%4==0)
            {
            ?>

                      <div class="item text-center guide-sliders">
        <?php }?>


            <div class="col-md-3 image-grid">
                             <img src="Admin/addverimages/<?php echo $data[3]; ?>" width="300px" height="150px" >

                             <p><a href="#"><?php echo $data[2]; ?></a></p>
                         </div>
                        <?php if($n%4==3)
                        {?>
                    </div>

                    <?php
                        }
                    $n=$n+1;
        }
        ?>
        </div>
</div>
</div>
<!-- Contact Us	-->
<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">Plan Your Trip Our travel experts can help you book now!</h4>
		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F">Tour and Travel Company</h4>
						<p style="color:#000">NEED HELP BOOKING PACKAGE<br/>
                        For fantastic suggestions you may also call our travel expert</p>
						<h5 style="color:#000"><span class="img1"></span>(+84) 831231234&nbsp;&nbsp;&nbsp;</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">infos@tourandtravel.com</a></h5>
						<h5 style="color:#000"><span class="img3"></span>1324 Le Trong Tan Street - Tan Phu Dist - HCMC</h5>
                        <br/>
                       <img src="images/contac.jpg" />
                      </div>
				  <div class="col-md-8 contact">
                  
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
                            $s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
                        mysqli_query($cn,$s);
                        mysqli_close($cn);
                        echo "<script>alert('Record Save');</script>";
                        }

                    }
                    ?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea></td></tr>
					  <tr><td><input type="submit" value="Send message" name="sbmt"></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
    </div>	  
</div>
<?php include_once('bottom.php'); ?>
</body>
</html>

