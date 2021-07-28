<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_m extends CI_Model  
{
    public function get_page($table, $page) {
        $this->db->where(['page' => $page]);
        $query = $this->db->get($table);
        return $query->row();
    }
    
    public function get_all($table) {
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_one($table, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->get($table);
        return $query->row();
    }

    public function get_category($table,$item_id) {
        $this->db->distinct();
        $this->db->where(['table_name' => $table]);
        $this->db->where(['item_id' => $item_id]);
        $query = $this->db->get('gallery');
        
        return $query->result();  
    }

    public function get_api_photos(){
        $this->db->where(['is_photo' => 1]);
        $query = $this->db->get('media');
        return $query->result();
    }

    public function get_images($table, $table_name, $id) {
        $this->db->where([
            'item_id' => $id,
            'table_name' => $table_name,
            ]);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function insert($table, $data) {
        //$data = $this->security->xss_clean($data);
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function update($table, $data, $id) {
        //$data = $this->security->xss_clean($data);
        $this->db->where(['id' => $id]);
        $query = $this->db->update($table, $data);
        return $query;
    }

    public function delete($table, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->delete($table);
        return $query;
    }

    public function get_gallery($table,$item_id) {
        $this->db->where(['table_name' => $table]);
        $this->db->where(['item_id' => $item_id]);
        $query = $this->db->get('gallery');
        
        return $query->result();        
    }
}
