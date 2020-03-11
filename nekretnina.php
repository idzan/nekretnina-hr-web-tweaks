<?php
/*
Plugin Name: Tweaks for Nekretnina.hr
Plugin URI: https://nekretnina.hr/
Description: Some tweaks and usefull addons for Nekretnina.hr project
Version: 1.0
Author: Idzan
Author URI: https://idzan.eu
License: GPLv2 or later
*/
// Add SVG Support
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');