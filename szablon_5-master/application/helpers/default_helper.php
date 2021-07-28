<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadDefaultData() {
    $CI = &get_instance();
	$data['mails'] = $CI->back_m->get_all('mails');
	$data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);
	$data['media'] = $CI->back_m->get_all('media');
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact'] = $CI->back_m->get_one('contact_settings', 1);
	$data['slider'] = $CI->back_m->get_all('slider');
	$data['entry_nav'] = $CI->back_m->get_page('subpages', 'wpis');
	$data['blog_nav'] = $CI->back_m->get_page('subpages', 'blog');
	$data['services_nav'] = $CI->back_m->get_page('subpages', 'uslugi');
	$data['gallery_nav'] = $CI->back_m->get_page('subpages', 'galeria');
	$data['contact_nav'] = $CI->back_m->get_page('subpages', 'kontakt');
	$data['about_nav'] = $CI->back_m->get_page('subpages', 'o_firmie');
	$data['blog'] = $CI->back_m->get_all('blog');
	$data['api_gallery'] = apiGalleryRows();
	
    return $data;
}

function loadDefaultDataFront() {
    $CI = &get_instance();
	$data['mails'] = $CI->back_m->get_all('mails');
	// $data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);
	$data['media'] = $CI->back_m->get_all('media');
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact'] = $CI->back_m->get_one('contact_settings', 1);
	$data['slider'] = $CI->back_m->get_all('slider');
	$data['entry_nav'] = $CI->back_m->get_page('subpages', 'wpis');
	$data['blog_nav'] = $CI->back_m->get_page('subpages', 'blog');
	$data['services_nav'] = $CI->back_m->get_page('subpages', 'uslugi');
	$data['gallery_nav'] = $CI->back_m->get_page('subpages', 'galeria');
	$data['contact_nav'] = $CI->back_m->get_page('subpages', 'kontakt');
	$data['about_nav'] = $CI->back_m->get_page('subpages', 'o_firmie');
	$data['blog'] = $CI->back_m->get_all('blog');
	$data['subpages'] = $CI->back_m->get_all('subpages');
	
    return $data;
}
