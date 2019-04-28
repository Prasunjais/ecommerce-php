<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Size_Model extends CI_Model {
    
        public function get_list()
        {
                $this->db->select(" * ");
                $this->db->from('tbl_size');
//                $this->db->where('status','0');
                $query = $this->db->get();
                return $query->result();
        }
        public function editSize($id)
        {
                $this->db->select(" * ");
                $this->db->from('tbl_size');
                $this->db->where('id',$id);
                $query = $this->db->get();
                return $query->result();
        }
        
        public function size_add($data)
        {
             $this->db->insert('tbl_size', $data); 
             return TRUE;
        }
        
        public function editSizeSubmit($data,$category_id)
        {
           $this->db->where('id',$category_id);
           $query = $this->db->update('tbl_size',$data);
        }
        
        function deleteSize($id) {
            $this->db->where('id',$id);
            $this->db->delete('tbl_size');
        }
        
}