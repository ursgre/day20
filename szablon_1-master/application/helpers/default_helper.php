<?php
defined('BASEPATH') or exit('No direct script access allowed');

function loadDefaultData()
{
    $CI = &get_instance();
    $data['settings'] = $CI->back_m->get_one(getTable('settings'), 1);
    $data['contact'] = $CI->back_m->get_one(getTable('contact_settings'), 1);
    $data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);
    $data['mails'] = $CI->back_m->get_all('mails');
    $data['media'] = $CI->back_m->get_all('media');
    $data['jezyki'] = $CI->back_m->get_all('jezyki');
    $data['api_gallery'] = apiGalleryRows();

    return $data;
}

function loadDefaultDataFront()
{
    $CI = &get_instance();
    $data['oferta'] = $CI->back_m->get_with_limit(getTable('offer'), 4);
    $data['settings'] = $CI->back_m->get_one(getTable('settings'), 1);
    $data['subpages'] = $CI->back_m->get_all(getTable('subpages'));
    $data['footer_links'] = $CI->back_m->get_with_limit(getTable('subpages'), 4);
    $data['contact'] = $CI->back_m->get_one(getTable('contact_settings'), 1);
    $data['naglowki'] = $CI->back_m->get_all(getTable('naglowki'));
    $data['jezyki'] = $CI->back_m->get_all('jezyki');
    $data['current_page'] = $CI->uri->segment(1) == '' ? $CI->back_m->get_where('subpages', 'page', '') : $CI->back_m->get_subpage($CI->uri->segment(1));
    $data['scripts'] = $CI->back_m->get_one('scripts', 1);
    $data['seo_description'] = $data['current_page']->description;
    $data['meta_title'] = $data['current_page']->title;
    $data['seo_image'] = $data['current_page']->photo;

    return $data;
}

function assets()
{
    return base_url() . 'assets/front/';
}


function images()
{
    return base_url() . 'uploads/';
}