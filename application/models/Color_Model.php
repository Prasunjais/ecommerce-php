<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Color_Model extends CI_Model {
    
        public function get_list()
        {
                $this->db->select(" * ");
                $this->db->from('tbl_color');
//                $this->db->where('status','0');
                $query = $this->db->get();
                return $query->result();
        }
        public function editColor($id)
        {
                $this->db->select(" * ");
                $this->db->from('tbl_color');
                $this->db->where('id',$id);
                $query = $this->db->get();
                return $query->result();
        }
        
        public function color_add($data)
        {
             $this->db->insert('tbl_color', $data); 
             return TRUE;
        }
        
        public function editColorSubmit($data,$category_id)
        {
           $this->db->where('id',$category_id);
           $query = $this->db->update('tbl_color',$data);
        }
        
        function deleteColor($id) {
            $this->db->where('id',$id);
            $this->db->delete('tbl_color');
        }
        
}