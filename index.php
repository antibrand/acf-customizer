<?php

/*
Plugin Name: ACF Customizer
Plugin URI: https://github.com/mcguffin/acf-customizer
Description: Use ACF Fields in customizer.
Author: Jörn Lund
Version: 0.2.4
Author URI:
License: GPL3
Github Repository: mcguffin/acf-customizer
Github Plugin URI: mcguffin/acf-customizer
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


namespace ACFCustomizer;

if ( ! defined('ABSPATH') ) {
	die('FU!');
}


define( 'ACF_CUSTOMIZER_FILE', __FILE__ );
define( 'ACF_CUSTOMIZER_DIRECTORY', plugin_dir_path(__FILE__) );
define( 'ACF_CUSTOMIZER_PLUGIN', pathinfo( ACF_CUSTOMIZER_DIRECTORY, PATHINFO_FILENAME ) . '/' . pathinfo( __FILE__, PATHINFO_BASENAME ) );

require_once ACF_CUSTOMIZER_DIRECTORY . 'include/autoload.php';

Core\Core::instance();


if ( is_admin() || defined( 'DOING_AJAX' ) ) {
	// init auto upgrader
	if ( ! file_exists( ACF_CUSTOMIZER_DIRECTORY . '/.git/' ) ) {

		// Not a git. Check if https://github.com/afragen/github-updater is active
		$active_plugins = get_option('active_plugins');
		if ( $sitewide_plugins = get_site_option('active_sitewide_plugins') ) {
			$active_plugins = array_merge( $active_plugins, array_keys( $sitewide_plugins ) );
		}

		if ( ! in_array( 'github-updater/github-updater.php', $active_plugins ) ) {
			// not github updater. Init our own...
			AutoUpdate\AutoUpdateGithub::instance()->init( __FILE__ );
		}
	}

}
