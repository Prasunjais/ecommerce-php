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
                           <form method="post"  action="<?php echo base_url();?>checkout/step_3">
				 <div class="register-top-grid">
					<h3>2. Payment</h3>
                                	 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Payment <label>*</label></span>
						  <select name="payment" required style="background: #ffffff; border: 1px solid #e1e1e1; padding: 10px; width: 80%;">
                                                                <option value="">Select Payment Method</option>
                                                                    <option value="cash">Cash</option>
                                                                </select>
					 </div>
                                	 <div class="clearfix"> </div>
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
        transition: all 0.5s ease 0s;" type="submit" value="Continue" name="paymentdetail">
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
	