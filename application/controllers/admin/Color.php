<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Color extends CI_Controller {

        public function __construct()
	{
            parent::__construct();
            
            $this->load->model('Category_Model');
            $this->load->model('Common_Modal');
            $this->load->model('Subcategory_Model');
            $this->load->model('Color_Model');
            if($this->session->email == "")
            {
                redirect('account/login');
            }
	}
        
        public function index()
        {
            
            $data['color_list'] = $this->Color_Model->get_list();
            $this->load->view('admin/color/list',$data);
        }   

       public function color_add()
       {
            $this->form_validation->set_rules('color_name', 'Color Name', 'required');
            $this->form_validation->set_rules('color_code', 'Color Code', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('admin/color/add');
            }
            else
            {
                $color_name = strtolower($this->input->post('color_name'));
                $user_id = $this->session->userid;
                $data = array(
                        'color_name' => $color_name,
                        'colorcode' => $this->input->post('color_code'),
                        'created_by' => $user_id,
                        'created_date' => date("Y-m-d H:i:s"),
                        'status' => '0'
                );
                $insert = $this->Color_Model->color_add($data);
                $this->session->set_flashdata('SUCCESSMSG','Color Created Successfully');
                redirect('account/color-add');
            }
            
       }
        public function editColor($id) {
            if(!empty($_POST))
            {
                $this->form_validation->set_rules('color_name', 'Color Name', 'required');
                $this->form_validation->set_rules('color_code', 'Color Code', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                    $data['editColor'] = $this->Color_Model->editColor($id);
                    $this->load->view('admin/color/edit',$data);
                }
                else
                {
                    $category_id = $this->input->post('color_id');
                    $color_name = strtolower($this->input->post('color_name'));
                    $user_id = $this->session->userid;
                    $data = array(
                            'color_name' => $color_name,
                            'colorcode' => $this->input->post('color_code'),
                            'modified_by' => $user_id,
                            'modified_date' => date("Y-m-d H:i:s"),
                            'status' => '0'
                    );
                    
                    $this->Color_Model->editColorSubmit($data,$category_id);
                    $this->session->set_flashdata('SUCCESSMSG','Color Updated Successfully!!');
                    redirect('account/color');
                }
               
            } 
            else 
            {
                $data['editColor'] = $this->Color_Model->editColor($id);
                $this->load->view('admin/color/edit',$data);
            }
        }
 
      
        public function deletecolor($id) 
        {
            $this->Color_Model->deleteColor($id);
            $this->session->set_flashdata('SUCCESSMSG','Color Deleted Successfully!!');
            redirect('account/color');
        }
       
}
