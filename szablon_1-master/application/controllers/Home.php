<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->db->table_exists('users')) {
			$this->base_m->create_base();
		}
		if ($this->session->userdata('lang') == '') {
			$this->session->set_userdata('lang', 'pl');
		}
	}

	public function test()
	{

		$this->load->view('front/pages/form');
	}

	public function captcha()
	{

		$this->load->view('front/pages/captcha');
	}


	public function index()
	{
		$data = loadDefaultDataFront();
		$data['slider'] = $this->back_m->get_all_active(getTable('slider'));
		$data['parallax'] = $this->back_m->get_one(getTable('parallax'), 1);
		$data['atributes'] = $this->back_m->get_with_limit(getTable('atributes'), 2);
		$data['offer'] = $this->back_m->get_with_limit(getTable('offer'), 3);

		echo loadViewsFront('index', $data);
	}


	public function about()
	{
		$data = loadDefaultDataFront();
		$data['about'] = $this->back_m->get_one(getTable('about'), 1);

		echo loadViewsFront('about', $data);
	}

	public function del()
	{
		for ($i = 3261; $i < 3316; $i++) {
			$this->back_m->delete('gallery', $i);
		}
	}


	public function blog()
	{
		$data = loadDefaultDataFront();
		$data['blog'] = $this->back_m->get_all_active(getTable('blog'));


		echo loadViewsFront('blog', $data);
	}



	public function single_article($id, $slug)
	{
		$data = loadDefaultDataFront();
		$data['single'] = $this->back_m->get_one(getTable('blog'), $id);
		$data['blog'] = $this->back_m->get_with_limit(getTable('blog'), 5, 'desc');
		$data['gallery'] = $this->back_m->get_images('gallery', getTable('blog'), $id);
		$data['meta_title'] = $data['single']->title;
		$data['seo_image'] = $data['single']->photo;
		$data['seo_description'] = $data['single']->meta_description;

		echo loadViewsFront('single_article', $data);
	}


	public function offer()
	{
		$data = loadDefaultDataFront();
		$data['offer'] = $this->back_m->get_all_active(getTable('offer'));

		echo loadViewsFront('offer', $data);
	}


	public function single_offer($id, $slug)
	{
		$data = loadDefaultDataFront();
		$data['single'] = $this->back_m->get_one(getTable('offer'), $id);
		$data['gallery'] = $this->back_m->get_images('gallery', getTable('offer'), $id);
		$data['meta_title'] = $data['single']->title;
		$data['seo_image'] = $data['single']->photo;
		$data['seo_description'] = $data['single']->meta_description;


		echo loadViewsFront('single_offer', $data);
	}


	public function gallery()
	{
		$data = loadDefaultDataFront();
		$data['gallery'] = $this->back_m->get_images('gallery', 'gallery_page', 1);

		echo loadViewsFront('gallery', $data);
	}


	public function contact()
	{
		$data = loadDefaultDataFront();
		$data['kontakt'] = $this->back_m->get_all_active(getTable('kontakt'));

		echo loadViewsFront('contact', $data);
	}

	public function set_lang()
	{
		$this->session->set_userdata('lang', $_POST['lang']);
		redirectAfterLangChange($_POST['redirect']);
	}
}