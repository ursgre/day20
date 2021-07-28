<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Active_records extends CI_Controller
{
    public function set()
    {
        if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
            if (!$this->db->field_exists('active', $_POST['table'])) {
                $this->base_m->create_boolean_column($_POST['table'], 'active');
            }

            $this->back_m->update($_POST['table'], ['active' => $_POST['active']], $_POST['id']);
        }
    }
}