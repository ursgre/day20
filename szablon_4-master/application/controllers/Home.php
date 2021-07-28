<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
	}

	public function index() {
		$data = loadDefaultDataFront();
		$data['baner'] = $this->back_m->all_active('glowna_baner');
		$data['sekcja_1'] = $this->back_m->get_active('nazwy_sekcji', 1);
		$data['sekcja_2'] = $this->back_m->get_active('nazwy_sekcji', 2);
		$data['sekcja_3'] = $this->back_m->get_active('nazwy_sekcji', 3);
		$data['sekcja_4'] = $this->back_m->get_active('nazwy_sekcji', 4);
		$data['sekcja_5'] = $this->back_m->get_active('nazwy_sekcji', 5);
		$data['special'] = $this->back_m->get_active('specialna_sekcja', 1);
		$data['pasek'] = $this->back_m->get_all('pasek_pod_banerem');
		$data['blog_active'] = $this->back_m->all_active('blog');
		$data['sekcja_licznik'] = $this->back_m->get_all('ofirmie_sekcja_2');
		$data['sekcja_uslugi'] = $this->back_m->get_all('uslugi');
		$data['blogs'] = $this->back_m->get_random('blog', 3);
		$data['galeria_project'] = $this->back_m->get_all('galeria');
		
		echo loadViewsFront('index', $data);
	}

	public function ofirmie() {
		$data = loadDefaultDataFront();
		$data['ekipa'] = $this->back_m->get_all('ofirmie_ekipa');
		$data['sekcja_1'] = $this->back_m->get_all('ofirmie_sekcja_1');
		$data['sekcja_2'] = $this->back_m->get_all('ofirmie_sekcja_2');
		$data['pasek'] = $this->back_m->get_all('pasek_pod_banerem');
		$data['sekcja_4'] = $this->back_m->get_active('nazwy_sekcji', 4);
		$data['sekcja_5'] = $this->back_m->get_active('nazwy_sekcji', 5);
		$data['blogs'] = $this->back_m->get_random('blog', 3);
		$data['naglowek'] = $this->back_m->get_one('naglowki',1);
		echo loadViewsFront('ofirmie', $data);
	}

	public function uslugi() {
		$data = loadDefaultDataFront();
		$data['pasek'] = $this->back_m->get_all('pasek_pod_banerem');
		$data['rows'] = $this->back_m->get_all('uslugi');
		echo loadViewsFront('uslugi', $data);
	}
	public function uslugi_wpis($slug, $id) {
		$data = loadDefaultDataFront();
		$data['value'] = $this->back_m->get_one('uslugi', $id);
		echo loadViewsFront('uslugi_wpis', $data);
	}

	public function blog() {
		$data = loadDefaultDataFront();
		$data['rows'] = $this->back_m->get_all('blog');
		$data['pasek'] = $this->back_m->get_all('pasek_pod_banerem');
		$data['sekcja_5'] = $this->back_m->get_active('nazwy_sekcji', 5);
		echo loadViewsFront('blog', $data);
	}
	public function wpis($slug, $id) {
		$data = loadDefaultDataFront();
		$data['rows'] = $this->back_m->get_random('blog', 3, $id);
		$data['value'] = $this->back_m->get_one('blog', $id);
		$data['gallery'] = $this->back_m->get_images('gallery', 'blog', $id);
		$data['sekcja_5'] = $this->back_m->get_active('nazwy_sekcji', 5);
		echo loadViewsFront('wpis', $data);
	}

	public function galeria() {
		$data = loadDefaultDataFront();
		$data['sekcja_3'] = $this->back_m->get_active('nazwy_sekcji', 3);
		$data['sekcja_4'] = $this->back_m->get_active('nazwy_sekcji', 4);
		$data['sekcja_licznik'] = $this->back_m->get_all('ofirmie_sekcja_2');
		$data['pasek'] = $this->back_m->get_all('pasek_pod_banerem');
		$data['rows'] = $this->back_m->get_all('galeria');
		echo loadViewsFront('galeria', $data);
	}

	public function kontakt() {
		$data = loadDefaultDataFront();
		echo loadViewsFront('kontakt', $data);
	}
}