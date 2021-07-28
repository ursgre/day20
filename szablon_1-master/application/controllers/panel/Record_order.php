<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Record_order extends CI_Controller
{
    public function set()
    {
        if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
            if (!$this->db->field_exists('record_order', $_POST['table'])) {
                $this->base_m->create_int_column($_POST['table'], 'record_order');
            }

            $this->back_m->update($_POST['table'], ['record_order' => $_POST['record_order']], $_POST['id']);
        }
    }
}