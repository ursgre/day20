<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_m extends CI_Model  
{
    public function get_all($table) {
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_one($table, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->get($table);
        return $query->row();
    }
    public function all_active($table) {
        $this->db->where(['active' => 1]);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_active($table, $id) {
        $this->db->where(['id' => $id]);
        $this->db->where(['active' => 1]);
        $query = $this->db->get($table);
        return $query->row();
    }

    public function get_api_photos(){
        $this->db->where(['is_photo' => 1]);
        $query = $this->db->get('media');
        return $query->result();
    }

    public function get_where($table, $col, $where) {
        $this->db->where([$col => $where]);
        $query = $this->db->get($table);
        return $query->row();
    }

    public function get_images($table, $table_name, $id) {
        $this->db->where([
            'item_id' => $id,
            'table_name' => $table_name,
            ]);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_random($table, $limit, $id = '') {
        $this->db->where(['id !=' => $id]);
        $this->db->order_by('rand()');
        $this->db->limit($limit);
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
}
