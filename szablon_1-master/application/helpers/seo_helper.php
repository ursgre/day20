<?php
defined('BASEPATH') or exit('No direct script access allowed');

function getSeoDescription($data)
{
	$CI = &get_instance();


	if ($CI->uri->segment(1) == 'blog' && $CI->uri->segment(2) != '') $description = $CI->back_m->get_one('blog', $CI->uri->segment(2))->meta_description;
	else if ($CI->uri->segment(1) == 'oferta') $description = $CI->back_m->get_one('offer', $CI->uri->segment(2))->meta_description;
	else if ($CI->uri->segment(2) == '') $description = $data['current_page']->meta_description;

	return $description;
}