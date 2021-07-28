<?php
defined('BASEPATH') or exit('No direct script access allowed');

function removeFileFromServer($id)
{
    $CI = &get_instance();
    $file = $CI->back_m->get_one('media', $id);
    $full_path = 'uploads/' . getUploadsPath($file->full_path);

    if (file_exists($full_path)) unlink($full_path);
    $webp_path = $full_path . '.webp';
    if (file_exists($webp_path)) unlink($webp_path);
}

function getUploadsPath($full_path)
{
    $path_array = explode('/', $full_path);
    return $path_array[count($path_array) - 2] . '/' . $path_array[count($path_array) - 1];
}