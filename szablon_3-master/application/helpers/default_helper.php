<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadDefaultData() {
    $CI = &get_instance();
	$data['mails'] = $CI->back_m->get_all('mails');
	$data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);
	$data['media'] = $CI->back_m->get_all('media');
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact'] = $CI->back_m->get_one('contact_settings', 1);
	$data['api_gallery'] = apiGalleryRows();

    return $data;
}

function loadDefaultDataFront() {
    $CI = &get_instance();
	$data['mails'] = $CI->back_m->get_all('mails');
	$data['media'] = $CI->back_m->get_all('media');
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact'] = $CI->back_m->get_one('contact_settings', 1);
	$data['current_subpage'] = getCurrentSubpage();
	$data['home'] = $CI->back_m->get_where('subpages', 'page', 'home');
	$data['ofirmie'] = $CI->back_m->get_where('subpages', 'page', 'ofirmie');
	$data['uslugi'] = $CI->back_m->get_where('subpages', 'page', 'uslugi');
	$data['blog'] = $CI->back_m->get_where('subpages', 'page', 'blog');
	$data['galeria'] = $CI->back_m->get_where('subpages', 'page', 'galeria');
	$data['kontakt'] = $CI->back_m->get_where('subpages', 'page', 'kontakt');
	$data['uslugi_footer'] = $CI->back_m->all_active('uslugi');
	$data['uslugi_active'] = $CI->back_m->all_active('uslugi');
	$data['blog_footer'] = $CI->back_m->all_active('blog');
	$data['przycisk'] = $CI->back_m->get_active('glowna_przycisk', 1);
	$data['glowna_oferta'] = $CI->back_m->get_one('glowna_oferta', 1);
	$data['seo_description'] = $data['current_subpage']->seo_description;

    return $data;
}

function getCurrentSubpage(){
	$CI = &get_instance();

	if($CI->uri->segment(1) == 'wpis'){
		$current_subpage = $CI->back_m->get_one('subpages', 4);
	}elseif($CI->uri->segment(1) == 'usluga'){
		$current_subpage = $CI->back_m->get_one('subpages', 3);
	}elseif($CI->uri->segment(1) == ''){
		$current_subpage = $CI->back_m->get_one('subpages', 1);
	}else{

		$current_subpage = $CI->back_m->get_subpage($CI->uri->segment(1));
	}

	return $current_subpage;
	
}

