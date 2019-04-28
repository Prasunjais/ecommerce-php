<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

        public function __construct()
	{
            parent::__construct();
            //load model
            $this->load->model('dashboard_model');
            $this->load->model('Category_Model');
            $this->load->model('Subcategory_Model');
            $this->load->model('Product_Model',"product_model");
            $this->load->library('cart');
            $this->load->helper('url');  
            $this->load->helper('form');  
            $this->load->library('session');
            $this->load->database();
            $this->load->library('encrypt');
             $this->load->library('pagination');
        }


        public function index()
        {
         
        }
	
        public function allProductList($cat_id,$subcat_id)
        {
            
            $config = array();
            $config["base_url"] = base_url() . "ProductList/$cat_id/$subcat_id";  
            $total_row   = $this->product_model->getproductList_count($cat_id,$subcat_id);
            $config["total_rows"] = $total_row;
            $config["per_page"] = 16;
            $config["uri_segment"]  = 4;
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = round($choice);
            $config['cur_tag_open'] = '&nbsp;<li class="active"><a >';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '&nbsp;';
            $config['num_tag_close'] = '&nbsp;';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $this->pagination->initialize($config);

            if($this->uri->segment(4)){
                $page = ($this->uri->segment(4)) ;
            }
            else{
                   $page = 0;
            } 
  
            $data["productlist"] = $this->product_model->getproductListCategoryWise($config["per_page"], $page,$cat_id,$subcat_id);
            $str_links = $this->pagination->create_links();
            $data["linked"] = explode('&nbsp;',$str_links );
          
            
            $data['category_list'] = $this->Category_Model->get_list();
            $data['subcate'] = $this->Subcategory_Model->viewSubCategoryList();
            $data['subcat_id'] = $subcat_id;
            $data['cat_id'] = $cat_id;
            
            
            $this->load->view('product',$data);
        }
        
        public function oneProductdetail()
        {
            $final_data = '';
            $product_id = $this->uri->segment('2');
            $data['product_detail'] = $this->product_model->productDetailsignle($product_id);
            foreach($data['product_detail'] as $post)
            {
                $related_product = $post->related_product; 
                $related_id = explode(",", $related_product);
                foreach ($related_id as $post)
                {
                    $related_product_detail = $this->product_model->relatedProduct($post);
                    $pro['detail']  = $related_product_detail;
                    $final_data[]   = $pro;
                }
                $data['related_product_detail'] = $final_data;
            }
          
            
            $data['category_list'] = $this->Category_Model->get_list();
            $data['subcate'] = $this->Subcategory_Model->viewSubCategoryList();
            $this->load->view('productDetails',$data);
        }
//        public function SingleProuctDetail()
//        {
//            $base  = base_url();
//            $product_id = $this->input->post('product_id');
//            $output['SingleProuctDetail'] = $this->product_model->SingleProuctDetail($product_id);
//            foreach ($output['SingleProuctDetail'] as $post)
//            {
//                $data['name'] = $post->product_name;
//                $data['product_description'] = $post->product_description;
//                $data['product_price'] = $post->product_price;
//                $data['product_image'] = "<img height=350px  width=100%  src='".$base."upload/product/".$post->id."/".$post->product_image."'>";
//                $data['view_detail'] = "<a href='".$base."ProductDetail/".$post->id."' class='btn btn-danger my-cart-btn my-cart-btn1'>View Detail</a>";
//            }
//             echo json_encode($data);
//        }
        public function SingleProuctDetail()
        {
            $detail = '';
            $base  = base_url();
            $product_id = $this->input->post('product_id');
            $output['SingleProuctDetail'] = $this->product_model->SingleProuctDetail($product_id);
            $output['size_list'] = $this->Category_Model->get_list_size();
            $output['color_list'] = $this->Category_Model->get_list_color();
            foreach ($output['SingleProuctDetail'] as $post)
            {
                $colorencode = explode(",", $post->color_id);
                $sizeencode = explode(",", $post->size_id);
                $detail.= "<div class='modal-dialog' role='document'>
					<div class='modal-content modal-info'>
						<div class='modal-header'>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>				
						</div>
						<div class='modal-body modal-spa'>
								<div class='col-md-5 span-2'>
											<div class='item'>
												<img height=350px  width=100%  src='".$base."upload/product/".$post->id."/".$post->product_image."'>
											</div>
								</div>
								<div class='col-md-7 span-1'>
								       <h3 style='text-transform: capitalize'>".$post->product_name."</h3>
									<div class='price_single'>
                                                                            <br>
                                                                          <span class='reducedfrom '>Rs. ".$post->product_price."</span>
                                                                              <br>
                                                                              <br>
                                                                              <h4>Color</h4>
                                                                          <span class='reducedfrom '>";
                foreach ($output['color_list'] as $color) {
                    foreach ($colorencode as $encode) {
                        if($color->id==$encode)
                        {
                            $detail.="<span class='data_values ' id="."c".$color->id." style=' height: 20px; width:20px; cursor: pointer;margin:8px; background-color:#".$color->colorcode.";'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>";
                        }

                    }
                }
                $detail.="<br><br><h4>Size</h4>";
                foreach ($output['size_list'] as $size) {
                    foreach ($sizeencode as $encode) {
                        if($size->id==$encode)
                        {
                            $detail.="<span class='data_values_size ' id="."size".$size->id." style='margin:8px;cursor: pointer;' >".$size->size."</span>";
                        }

                    }
                }
                        
                                                                     $detail.=  "</span>
									<div class='clearfix'></div>
									</div>
									<br>
									
									<div class='add-to'>
								                <form action='".$base."cart/add' method='post' name='productformcart' id='addcartform'>
                                                                                    <input type='hidden' name='color' id='colorProduct' value=''>
                                                                                    <input type='hidden' name='size' id='sizeProduct' value=''>
                                                                                    <input type='hidden' name='id'  value=".$post->id.">
                                                                                    <input type='hidden' name='name'  value=".$post->product_name.">
                                                                                    <input type='hidden' name='price' value=".$post->product_price.">
                                                                                    <input type='hidden' name='image' value=".$post->product_image.">
                                                                                    Qty<input min='1' type='number' id='quantity' name='qty' value='1' class='form-control input-small' style='width:60px;'>
                                                                                    <a href='".$base."ProductDetail/".$post->id."' class='btn btn-danger my-cart-btn my-cart-btn1'>View Detail</a>
                                                                                    <button type='submit'  class='add-cart item_add' name='action'>ADD TO CART</button>
                                                                                </form>
										</div>
								</div>
								<div class='clearfix'> </div>
							</div>
						</div>
					</div>";
                
                
                $data['success'] = $detail;
            }
             echo json_encode($data);
        }
        
    public function getUserEmail()
    {
		if (!isset($_GET['term']))
		exit;

		$term = $_REQUEST['term'];
		$data = array();
		$rows = $this->product_model->getUser($term);
		foreach( $rows as $row )
		{
			$data[] = array(
				'label' => $row->product_name,
				'value' => $row->product_name);  
		}
		echo json_encode($data);
		flush();
	}
}
