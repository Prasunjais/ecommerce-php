<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
        <style>
          
    .active
    {
        border: 2px solid #0000ff;
    }

.gallery-info {
    background-color: rgba(25, 23, 23, 0.4);
    display: none;
    left: 8px;
    padding: 0.5em 0;
    position: absolute;
    top: 67.6%;
    width: 94%;
}
.modal-header {
    border-bottom: 0px solid #e5e5e5;
    min-height: 16.4286px;
    padding: 15px;
}
            </style>
</head>
<body>
	<!--header-->
		<?php require_once 'header.php';?>
			<!--header-->
		<div class="banner-section">
			<div class="container">
				<div class="banner-grids">
					<div class="col-md-6 banner-grid">
						<h2>the latest collections</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="<?=base_url();?>" class="button"> shop now </a>
					</div>
				<div class="col-md-6 banner-grid1">
						<img src="<?=base_url();?>images/p2.png" class="img-responsive" alt=""/>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
		<div class="banner-bottom">
		<div class="gallery-cursual">
		<!--requried-jsfiles-for owl-->
		
		<!--requried-jsfiles-for owl -->
		<!--start content-slider-->
		<div id="owl-demo" class="owl-carousel text-center">
                    <?php   foreach ($slider as $slide)
                    {?>
                    <div class="item" >
                            <img class="lazyOwl" data-src="<?= base_url();?>upload/slider/<?=$slide->id?>/<?=$slide->name?>" style="height: 220px;" alt="name">
			</div>
                     <?php }
                    ?>
		</div>
		<!--sreen-gallery-cursual-->
		</div>
		</div>
		<div class="gallery">
                <div class="container">
			<h3>Popular Products</h3>
			<div class="gallery-grids">
                            <?php 
                                if(!empty($popular_product))
                                {
                                    foreach ($popular_product as $popular)
                                    { 
                                        
                                        $id = $popular->id;
                                        $name = $popular->product_name;
                                        $description = $popular->product_description;
                                        $price = $popular->product_price;
                                        $image = $popular->product_image;
                                    ?>
				<div class="col-md-3 gallery-grid ">
                                    <a><img class="quicklook" id="<?=$popular->id;?>" src="<?=base_url();?>/upload/product/<?=$popular->id;?>/<?=$popular->product_image;?>" style="height: 310px; width: 99%; cursor: pointer;" alt=""/>
					<div class="gallery-info quicklook" id="<?=$popular->id;?>" style="cursor: pointer;">
					<div class="quick">
                                            <p><span class="glyphicon glyphicon-eye-open "  style="cursor: pointer;" aria-hidden="true"></span> view</p>
					</div>
					</div>
                                    </a>
					<div class="galy-info">
						<p><?=$popular->product_name;?></p>
						<div class="galry">
						<div class="prices">
                                                    <h5  class="item_price" style="color: #333333;">Rs. <?=$popular->product_price;?></h5>
						</div>
					<div class="clearfix"></div>
					</div>
					</div>
				</div>
                             <?php }
                                }
                                else
                                {
                                     echo "No Item available!!";
                                } ?>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
                        
                        
            <div class="gallery">
                <div class="container">
			<h3>Latest Products</h3>
			<div class="gallery-grids">
                              <?php 
                                    if(!empty($latest_product))
                                    {
                                    foreach ($latest_product as $latest)
                                    { 
                                                                $id = $latest->id;
                                                                $name = $latest->product_name;
                                                                $description = $latest->product_description;
                                                                $price = $latest->product_price;
                                                                $image = $latest->product_image;
                                    ?>
				<div class="col-md-3 gallery-grid ">
                                    <a><img class="quicklook" id="<?=$latest->id;?>" src="<?=base_url();?>/upload/product/<?=$latest->id;?>/<?=$latest->product_image;?>" style="height: 310px; width: 99%; cursor: pointer;" alt=""/>
					<div class="gallery-info quicklook" id="<?=$latest->id;?>" style="cursor: pointer;">
					<div class="quick">
                                            <p><span class="glyphicon glyphicon-eye-open "  style="cursor: pointer;" aria-hidden="true"></span> view</p>
					</div>
					</div>
                                    </a>
					<div class="galy-info">
						<p><?=$latest->product_name;?></p>
						<div class="galry">
						<div class="prices">
						<h5  class="item_price" style="color: #333333;">Rs. <?=$latest->product_price;?></h5>
						</div>
					<div class="clearfix"></div>
					</div>
					</div>
				</div>
                             <?php }
                                }
                                else
                                {
                                     echo "No Item available!!";
                                } ?>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
                    
                        
            <div class="gallery">
                <div class="container">
			<h3>Feature Products</h3>
			<div class="gallery-grids">
                                <?php 
                                 if(!empty($feature_product))
                                    {
                                    foreach ($feature_product as $feature)
                                    { 
                                            $id = $feature->id;
                                            $name = $feature->product_name;
                                            $description = $feature->product_description;
                                            $price = $feature->product_price;
                                            $image = $feature->product_image;
                                        ?>
				<div class="col-md-3 gallery-grid ">
                                     <a><img class="quicklook" id="<?=$feature->id;?>" src="<?=base_url();?>/upload/product/<?=$feature->id;?>/<?=$feature->product_image;?>" style="height: 310px; width: 99%; cursor: pointer;" alt=""/>
					<div class="gallery-info quicklook" id="<?=$feature->id;?>" style="cursor: pointer;">
					<div class="quick">
                                            <p><span class="glyphicon glyphicon-eye-open "  style="cursor: pointer;" aria-hidden="true"></span> view</p>
					</div>
					</div>
                                    </a>
					<div class="galy-info">
						<p><?=$feature->product_name;?></p>
						<div class="galry">
						<div class="prices">
						<h5 class="item_price" style="color: #333333;">Rs. <?=$feature->product_price;?></h5>
						</div>
					<div class="clearfix"></div>
					</div>
					</div>
				</div>
                             <?php }
                                }
                                else
                                {
                                     echo "No Item available!!";
                                } ?>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
                        
	
                        <div class="modal fade" id="header-modal" aria-hidden="true"></div>
	<!--footer-->
		<?php require_once 'footer.php';?>
	<!--footer-->
	<script src="<?=base_url();?>js/owl.carousel.js"></script>
        <script>
                $(document).ready(function() {
                        $("#owl-demo").owlCarousel({
                                items : 5,
                                lazyLoad : true,
                                autoPlay : true,
                                pagination : false,
                        });
                });
        </script>	
</body>
</html>

<script type="text/javascript">
            	$(document).ready(function() {
                    
                                 $("#header-modal").delegate("#addcartform","submit",function(e){       
		var color = document.forms["productformcart"]["color"].value;
		if (color == null || color == "") {
			alert("Color must be Selected. Click for select.");
			return false;
		}
		
		var size = document.forms["productformcart"]["size"].value;
		if (size == null || size == "") {
			alert("Size must be Selected. Click for select.");
			return false;
		}
            });
                    
                     
                         
                   
                     $("#header-modal").delegate(".data_values","click",function(e){
                        var id = $(this).attr('id');
                        $('.data_values').removeClass('active');
                        $("#"+id).addClass('active');
                        $("#colorProduct").val(id.slice(1));
                    });
                     $("#header-modal").delegate(".data_values_size","click",function(e){
                        var id = $(this).attr('id');
                        $('.data_values_size').removeClass('active');
                        $("#"+id).addClass('active');
                        $("#sizeProduct").val(id.slice(4));
                    });

                    
                    $('.quicklook').click(function() {
                        var product_id = $(this).attr('id');
                        $.ajax({
                                type: "POST",
                                url: "<?=base_url();?>product/SingleProuctDetail",
                                data: {product_id: product_id},
                                dataType: "json",
                                success: function(data) {
                                     $("#header-modal").html(data.success);
                                      $('#header-modal').modal('show');  
                                }
                               
                        });
                });
        });
	</script>