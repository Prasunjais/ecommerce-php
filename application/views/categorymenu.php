<!DOCTYPE HTML>
<html>
<head>
<title>Developer</title>
<link href="<?=base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?=base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=base_url();?>css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="<?=base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/bootstrap-3.1.1.min.js"></script>
	<!-- cart -->
		<script src="<?=base_url();?>js/simpleCart.min.js"> </script>
	<!-- cart -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="<?=base_url();?>js/jquery.jscrollpane.min.js"></script>
		
<!-- //the jScrollPane script -->
<script type="text/javascript" src="<?=base_url();?>js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<link href="<?=base_url();?>css/form.css" rel="stylesheet" type="text/css" media="all" />
		<!-- the mousewheel plugin -->
    <script type="text/javascript" src="<?=base_url();?>js/jquery.mousewheel.js"></script>
    <style>
    .active1
    {
        border: 2px solid #0000ff;
    }
    .modal-header {
    border-bottom: 0px solid #e5e5e5;
    min-height: 16.4286px;
    padding: 15px;
}
    </style>
</head>
<body>
<?php  require_once 'header.php';?>

 
    	<div class="check-out">	 
		<div class="container">
			
				<div class=" con-w3l agileinf">
                                    <?php 
                                    foreach ($subcategory_list as $post)
                                    {
                                    ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
                                                                    <a href="<?=base_url();?>ProductList/<?=$category_id?>/<?=$post->subcat_id?>" class="offer-img" style="text-align: center;">
                                                                        <img height="240px" width="100%" src="<?=base_url();?>upload/subcategory/<?=$post->subcat_id?>/<?=$post->image?>" alt="">
									</a>
									<div class="mid-1">
                                                                            <div class="women" style="text-align: center; margin-bottom: 30px;">
                                                                                    <h4><a href="<?=base_url();?>ProductList/<?=$category_id?>/<?=$post->subcat_id?>" style="text-transform: capitalize; text-align: center;"><?=$post->subcategory_name?></a></h4>							
                                                                            </div>
									</div>
								</div>
							</div>
                                    <? }?>
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>

<div class="modal fade" id="header-modal" aria-hidden="true"></div>
<!--footer-->
<?php require 'footer.php';?>
<!-- //footer-->
  			
</body>
</html>

