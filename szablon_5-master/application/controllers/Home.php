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
		$data['offer'] = $this->back_m->get_all('oferta');
		$data['about_main'] = $this->back_m->get_one('o_nas', 2);
		$data['about'] = $this->back_m->get_all('o_nas');
		$data['why_us_main'] = $this->back_m->get_one('dlaczego_my', 1);
		$data['why_us'] = $this->back_m->get_all('dlaczego_my');
		$data['gallery_category'] = $this->back_m->get_category('galeria', 1);
		$data['gallery'] = $this->back_m->get_gallery('galeria', 1);
		$data['stats'] = $this->back_m->get_all('statystyki');
		$data['team'] = $this->back_m->get_all('team');
		$data['opinion'] = $this->back_m->get_all('opinie');
		$data['blog_header'] = $this->back_m->get_one('strona_glowna', 1);
		$data['opinion_header'] = $this->back_m->get_one('strona_glowna', 2);
		$data['team_header'] = $this->back_m->get_one('strona_glowna', 3);
		$data['gallery_header'] = $this->back_m->get_one('strona_glowna', 4);
		$data['why_us_header'] = $this->back_m->get_one('strona_glowna', 5);
		$data['about_header'] = $this->back_m->get_one('strona_glowna', 6);
		$data['services_header'] = $this->back_m->get_one('strona_glowna', 7);

		echo loadViewsFront('index', $data);
	}

	public function o_firmie() {
		$data = loadDefaultDataFront();
		$data['team_main'] = $this->back_m->get_one('team', 1);
		$data['team'] = $this->back_m->get_all('team');
		$data['about_main'] = $this->back_m->get_one('o_nas', 2);
		$data['about'] = $this->back_m->get_all('o_nas');
		$data['why_us_main'] = $this->back_m->get_one('dlaczego_my', 1);
		$data['why_us'] = $this->back_m->get_all('dlaczego_my');
		$data['subpage'] = $this->back_m->get_page('subpages', 'o_firmie');
		$data['team_header'] = $this->back_m->get_one('strona_glowna', 3);

		echo loadViewsFront('ofirmie', $data);
	}

	public function blog() {
		$data = loadDefaultDataFront();
		$data['subpage'] = $this->back_m->get_one('subpages', 3);
		$data['blog_header'] = $this->back_m->get_one('strona_glowna', 1);
		
		echo loadViewsFront('blog', $data);
	}

	public function uslugi() {
		$data = loadDefaultDataFront();
		$data['offer'] = $this->back_m->get_all('oferta');
		$data['subpage'] = $this->back_m->get_page('subpages', 'uslugi');
		$data['services_header'] = $this->back_m->get_one('strona_glowna', 7);
		
		echo loadViewsFront('oferta', $data);
	}

	public function galeria() {
		$data = loadDefaultDataFront();
		$data['gallery_category'] = $this->back_m->get_category('galeria', 1);
		$data['gallery'] = $this->back_m->get_gallery('galeria', 1);
		$data['subpage'] = $this->back_m->get_page('subpages', 'galeria');
		$data['gallery_header'] = $this->back_m->get_one('strona_glowna', 4);
		
		echo loadViewsFront('galeria', $data);
	}

	public function kontakt() {
		$data = loadDefaultDataFront();
		$data['subpage'] = $this->back_m->get_page('subpages', 'kontakt');
		$data['contact_header'] = $this->back_m->get_one('strona_glowna', 8);
		
		echo loadViewsFront('kontakt', $data);
	}

	public function wpis($id) {
		$data = loadDefaultDataFront();
		$data['subpage'] = $this->back_m->get_page('subpages', 'blog');
		$data['blog_entry'] = $this->back_m->get_one('blog', $id);
		$data['gallery'] = $this->back_m->get_gallery('blog', $id);
		
		echo loadViewsFront('wpis', $data);
	}
}