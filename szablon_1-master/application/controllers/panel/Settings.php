<?php
defined('BASEPATH') or exit('No direct script access allowed');

use WebPConvert\WebPConvert as WebPConvert;

class Settings extends CI_Controller
{

	public function index()
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$insert[$_POST['field']] = $_POST['value'];

			if (!$this->db->field_exists($_POST['field'], getTable($_POST['table']))) {
				$this->base_m->create_column(getTable($_POST['table']), $_POST['field']);
			}

			$this->back_m->update(getTable($_POST['table']), $insert, 1);
		} else {
			redirect('panel');
		}
	}

	public function tables()
	{
		getTranslatableTables();
	}

	public function updateAlt()
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$insert['alt'] = $_POST['value'];
			$this->back_m->update(getTable($_POST['table']), $insert, $_POST['id']);
		} else {
			redirect('panel');
		}
	}

	public function convert()
	{
		$data = get_api_gallery();
		$types = array('image/jpg', 'image/jpeg', 'image/png', 'image/bmp', 'image/jfif');
		for ($i = 0; $i < count($data); $i++) {
			for ($j = 0; $j < count($types); $j++) {
				if ($types[$j] == 'image/jpeg' || $types[$j] == 'image/png' || $types[$j] == 'image/svg') {
					WebPConvert::convert('uploads/' . $data[$i]['photo'], 'uploads/' . $data[$i]['photo'] . '.webp', []);
				}
			}
		}

		echo $data[0]['photo'];
	}


	public function photo()
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$now = date('Y-m-d');
			if (!is_dir('uploads/' . $now)) {
				mkdir('./uploads/' . $now, 0777, TRUE);
			}
			$config['upload_path'] = './uploads/' . $now;
			$config['allowed_types'] = '*';
			$config['max_size'] = 0;
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('photo_logo');
			$data = $this->upload->data();
			addMedia($data);
			$insert['logo'] = $now . '/' . $data['file_name'];
			if ($data['image_width'] > 1440) {
				resizeImg($data['file_name'], $now, '1440');
			}
			convert__to__webp($insert['logo']);
			$this->back_m->update(getTable($_POST['table']), $insert, 1);
		} else {
			redirect('panel');
		}
	}

	public function set_lang()
	{
		$this->session->set_userdata('lang', $_POST['lang']);
		redirectAfterLangChangeBack($_POST['redirect']);
	}

	public function api_table()
	{
		$table = json_decode($_POST['table']);
		$result = $this->back_m->get_all($table->table);
		echo json_encode($result);
	}


	// public function set_lang(){
	// 	$lang = json_decode($_POST['lang']);
	// 	$this->session->set_userdata('lang', $lang->lang);
	// 	echo $lang->lang;
	// }

	public function get_api_gallery()
	{
		$data = $this->back_m->get_api_photos();
		$tab = [];
		$i = 0;
		$array = [];
		foreach ($data as $d) {
			$help = explode('/', $d->full_path);
			$date = $help[count($help) - 2];
			$name = $help[count($help) - 1];
			$help = $date . '/' . $name;
			// $array[$i]
			// echo $help.'<br>';
			$tab[$i]['id'] = $d->id;
			$tab[$i]['alt'] = '';
			$tab[$i]['photo'] = $help;
			$i++;
		}

		$this->output->set_content_type('application/json');
		$this->output->set_status_header(200);
		$this->output->set_output(json_encode($tab));
	}
	public function privace()
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$now = date('Y-m-d');
			if (!is_dir('uploads/' . $now)) {
				mkdir('./uploads/' . $now, 0777, TRUE);
			}
			$config['upload_path'] = './uploads/' . $now;
			$config['allowed_types'] = '*';
			$config['max_size'] = 0;
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('privace');
			$data = $this->upload->data();
			addMedia($data);
			$insert['privace'] = $now . '/' . $data['file_name'];
			$this->back_m->update(getTable($_POST['table']), $insert, 1);
		} else {
			redirect('panel');
		}
	}

	public function gallery($table, $id)
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			// DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_images('gallery', $table, $id);
			echo loadSubViewsBack('gallery', 'index', $data);
		} else {
			redirect('panel');
		}
	}

	public function gallery_action($table, $id)
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$now = date('Y-m-d');
			$files = $_FILES;
			$cpt = count($_FILES['gallery']['name']);
			for ($i = 0; $i < $cpt; $i++) {
				if (!is_dir('uploads/' . $now)) {
					mkdir('./uploads/' . $now, 0777, TRUE);
				}
				$config['upload_path'] = './uploads/' . $now;
				$config['allowed_types'] = '*';
				$config['max_size'] = 0;
				$config['max_width'] = 0;
				$config['max_height'] = 0;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				$name = $files['gallery']['name'][$i];
				$name = slug__photo($name);
				$_FILES['gallery']['name'] = $name;
				$_FILES['gallery']['type'] = $files['gallery']['type'][$i];
				$_FILES['gallery']['tmp_name'] = $files['gallery']['tmp_name'][$i];
				$_FILES['gallery']['error'] = $files['gallery']['error'][$i];
				$_FILES['gallery']['size'] = $files['gallery']['size'][$i];
				if (!($this->upload->do_upload('gallery')) || $files['gallery']['error'][$i] != 0) {
					echo $this->upload->display_errors();
				} else {
					$data = $this->upload->data();
					if ($data['image_width'] > 1440) {
						resizeImg($data['file_name'], $now, '1440');
					}
					addMedia($data);
					$insert['photo'] = $now . '/' . $name;
					$insert['table_name'] = $table;
					$insert['item_id'] = $id;
					convert__to__webp($insert['photo']);
					$this->back_m->insert('gallery', $insert);
				}
			}
			$this->session->set_flashdata('flashdata', 'Rekord został dodany!');
			redirect('panel/settings/gallery/' . $table . '/' . $id);
		} else {
			redirect('panel');
		}
	}

	public function delete($table, $id)
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$this->session->set_flashdata('flashdata', 'Rekord został usunięty!');
			if ($table == "media") {
				$this->load->helper('file');
				removeFileFromServer($id);
			}
			if (in_array($table, getTranslatableTables())) {
				$this->back_m->delete(getTable($table), $id);
			} else {
				$this->back_m->delete($table, $id);
			}
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			redirect('panel');
		}
	}
	public function delete_photos($table, $id)
	{
		if (checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$this->session->set_flashdata('flashdata', 'Rekord został usunięty!');
			$this->back_m->delete('gallery', $id);
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			redirect('panel');
		}
	}
}