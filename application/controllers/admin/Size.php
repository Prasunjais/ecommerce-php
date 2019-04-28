<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size extends CI_Controller {

        public function __construct()
	{
            parent::__construct();
            
            $this->load->model('Category_Model');
            $this->load->model('Common_Modal');
            $this->load->model('Subcategory_Model');
            $this->load->model('Size_Model');
            if($this->session->email == "")
            {
                redirect('account/login');
            }
	}
        
        public function index()
        {
            
            $data['size_list'] = $this->Size_Model->get_list();
            $this->load->view('admin/size/list',$data);
        }   

       public function size_add()
       {
            $this->form_validation->set_rules('size_name', 'Size Name', 'required');
            
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('admin/size/add');
            }
            else
            {
                $size_name = strtolower($this->input->post('size_name'));
                $user_id = $this->session->userid;
                $data = array(
                        'size' => $size_name,
                        'created_by' => $user_id,
                        'created_date' => date("Y-m-d H:i:s"),
                        'status' => '0'
                );
                $insert = $this->Size_Model->size_add($data);
                $this->session->set_flashdata('SUCCESSMSG','Size Created Successfully');
                redirect('account/size');
            }
            
       }
        public function editSize($id) {
            if(!empty($_POST))
            {
                $this->form_validation->set_rules('size_name', 'Size Name', 'required');
                
                if ($this->form_validation->run() == FALSE)
                {
                    $data['editsize'] = $this->Size_Model->editSize($id);
                    $this->load->view('admin/size/edit',$data);                }
                else
                {
                    $category_id = $this->input->post('size_id');
                    $size_name = strtolower($this->input->post('size_name'));
                    $user_id = $this->session->userid;
                    $data = array(
                            'size' => $size_name,
                            'modified_by' => $user_id,
                            'modified_date' => date("Y-m-d H:i:s"),
                            'status' => '0'
                    );
                    
                    $this->Size_Model->editSizeSubmit($data,$category_id);
                    $this->session->set_flashdata('SUCCESSMSG','Size Updated Successfully!!');
                    redirect('account/size');
                }
               
            } 
            else 
            {
                $data['editsize'] = $this->Size_Model->editSize($id);
                $this->load->view('admin/size/edit',$data);
            }
        }
 
      
        public function deleteSize($id) 
        {
            $this->Size_Model->deleteSize($id);
            $this->session->set_flashdata('SUCCESSMSG','Size Deleted Successfully!!');
            redirect('account/size');
        }
       
}
