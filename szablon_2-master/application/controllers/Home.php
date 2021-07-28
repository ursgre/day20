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
		$data['slider'] = $this->back_m->get_all('slider');
		$data['about'] = $this->back_m->get_one('about',1);
		$data['parallax'] = $this->back_m->get_one('parallax',1);
		$data['atributes'] = $this->back_m->get_with_limit('atributes',5);
		echo loadViewsFront('index',$data);
	}


	public function about() {
		$data = loadDefaultDataFront();
		$data['about'] = $this->back_m->get_one('about',1);
		echo loadViewsFront('about',$data);
	}


	public function blog() {
		$data = loadDefaultDataFront();
		$data['blog'] = $this->back_m->get_all('blog');
		echo loadViewsFront('blog',$data);
	}



	public function single_article($id,$slug) {
		$data = loadDefaultDataFront();
		$data['single'] = $this->back_m->get_one('blog',$id);
		$data['blog'] = $this->back_m->get_with_limit('blog',5,'desc');
		$data['gallery'] = $this->back_m->get_images('gallery','blog',$id);
		echo loadViewsFront('single_article',$data);
	}


	public function offer() {
		$data = loadDefaultDataFront();
		$data['offer'] = $this->back_m->get_all('offer');
		echo loadViewsFront('offer',$data);
	}


	public function single_offer($id,$slug) {
		$data = loadDefaultDataFront();
		$data['single'] = $this->back_m->get_one('offer',$id);
		$data['gallery'] = $this->back_m->get_images('gallery','offer',$id);
		echo loadViewsFront('single_offer',$data);
	}


	public function gallery() {
		$data = loadDefaultDataFront();
		$data['gallery'] = $this->back_m->get_images('gallery','gallery_page',1);
		echo loadViewsFront('gallery',$data);
	}


	public function contact() {
		$data = loadDefaultDataFront();
		echo loadViewsFront('contact',$data);
	}
}