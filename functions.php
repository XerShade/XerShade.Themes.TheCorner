<?php
/**
*    Theme Name: The Corner
*    Theme URI: https://github.com/XerShade/XerShade.Themes.TheCorner
*    Author: XerShade
*    Author URI: http://www.xershade.ca/
*    Description: The theme for my personal website, inspired and based on the Uniform Dark theme for Invision Power Board. (https://www.ipsfocus.com/themes/uniform_dark/)
*    Requires at least: 6.0
*    Tested up to: 6.3.2
*    Requires PHP: 5.7
*    Version: 1.0.0
*    License: GNU General Public License v2 or later
*    License URI: http://www.gnu.org/licenses/gpl-2.0.html
*    Text Domain: thecorner
*    Tags: blog, full-site-editing
*/

/**
 * Enqueue default CSS styles
 */
function theme_enqueue_styles() {
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/style.css', null, date( 'Ymd-Gis', filemtime( get_template_directory() . '/style.css' ) ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );