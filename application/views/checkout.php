<!DOCTYPE HTML>
<html>
<head>
<title>Developer</title>
<link href="<?=base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?=base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=base_url();?>css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?=base_url();?>js/jquery.min.js"></script>
<!-- cart -->
<script src="<?=base_url();?>js/simpleCart.min.js"> </script>
<!-- cart -->
<script type="text/javascript" src="<?=base_url();?>js/bootstrap-3.1.1.min.js"></script>
<script src="<?=base_url();?>js/imagezoom.js"></script>
						<!-- FlexSlider -->
<script defer src="<?=base_url();?>js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?=base_url();?>css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>



</head>
<body>
<?php  require_once 'header.php';?>

    
    
    	<!--header-->
			<div class="content">
 <!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
                           <form method="post"  action="<?php echo base_url();?>checkout">
				 <div class="register-top-grid">
					<h3>1. Shipping Address</h3>
                                        
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>First Name<label>*</label></span>
                                              <input  type="text"  value="" required=""  placeholder="First Name" name="fname" >
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Last Name<label>*</label></span>
                                                <input  type="text"  value=""  required="" placeholder="Last Name" name="lname" >
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Phone<label>*</label></span>
                                                <input  type="text"  value=""  required="" placeholder="Phone" name="phone" >
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Email<label>*</label></span>
                                                <input  type="text"  value=""  required="" placeholder="Email" name="email" >
					 </div>
                                        <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Country<label>*</label></span>
                                              <input  type="text"  value="" required=""  placeholder="Country" name="country" >
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>City<label>*</label></span>
						<input  type="text"  value=""  required="" placeholder="City" name="city" >
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Province / Territory<label>*</label></span>
						 <input  type="text"  value="" required=""   placeholder="Province / Territory" name="province" >
                                         </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Postcode<label>*</label></span>
						 <input  type="text"  value="" required=""  placeholder="Postcode" name="postcode" >
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Street Adress 1<label>*</label></span>
						 <input  type="text"  value=""  required="" placeholder="Street Adress 1" name="add1" >
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Street Adress 2<label>*</label></span>
						 <input  type="text"  value=""  placeholder="Street Adress 2" name="add2" >
					 </div>
                                        

					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						
					   </a>
					 </div>
                              
				    
    <div class="register-but">
        <input  style="    background-color: #fff;
        border: 2px solid #000;
        color: #000;
        display: inline-block;
        font-size: 1.2em;
        outline: medium none;
        padding: 0.6em 2em;
        text-transform: uppercase;
        transition: all 0.5s ease 0s;" type="submit" value="Continue" name="cdetail">
    </div>
                        </form>
			
		   </div>
		 </div>
	</div>
<!-- registration -->


</div>
  
   
<br>
<br>

<!--footer-->
<?php require 'footer.php';?>
<!-- //footer-->
<div class="modal fade" id="header-modal" aria-hidden="true"></div>

</body>
</html>
	