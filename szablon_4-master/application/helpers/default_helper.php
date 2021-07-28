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
	$data['home'] = $CI->back_m->get_where('subpages', 'page', 'home');
	$data['ofirmie'] = $CI->back_m->get_where('subpages', 'page', 'ofirmie');
	$data['uslugi'] = $CI->back_m->get_where('subpages', 'page', 'uslugi');
	$data['blog'] = $CI->back_m->get_where('subpages', 'page', 'blog');
	$data['galeria'] = $CI->back_m->get_where('subpages', 'page', 'galeria');
	$data['kontakt'] = $CI->back_m->get_where('subpages', 'page', 'kontakt');
	$data['uslugi_footer'] = $CI->back_m->all_active('uslugi');
	$data['uslugi_active'] = $CI->back_m->all_active('uslugi');
	$data['blog_footer'] = $CI->back_m->all_active('blog');

    return $data;
}

