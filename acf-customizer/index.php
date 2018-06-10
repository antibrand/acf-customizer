<?php

/*
Plugin Name: acf-customizer
Plugin URI: http://wordpress.org/
Description: Enter description here.
Author: Jörn Lund
Version: 0.0.1
Author URI: 
License: GPL3
Text Domain: acf-customizer
Domain Path: /languages/
*/

/*  Copyright 2018  Jörn Lund

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
Plugin was generated by WP Plugin Scaffold
https://github.com/mcguffin/wp-plugin-scaffold
Command line args were: ``
*/


namespace AcfCustomizer;

if ( ! defined('ABSPATH') ) {
	die('FU!');
}


define( 'ACF-CUSTOMIZER_FILE', __FILE__ );
define( 'ACF-CUSTOMIZER_DIRECTORY', plugin_dir_path(__FILE__) );
define( 'ACF-CUSTOMIZER_PLUGIN', pathinfo( ACF-CUSTOMIZER_DIRECTORY, PATHINFO_FILENAME ) . '/' . pathinfo( __FILE__, PATHINFO_BASENAME ) );

require_once ACF-CUSTOMIZER_DIRECTORY . 'include/autoload.php';

Core\Core::instance();








if ( is_admin() || defined( 'DOING_AJAX' ) ) {





}

