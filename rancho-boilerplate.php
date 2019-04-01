<?php
/**
 * Plugin Name:     Rancho Boilerplate
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     rancho-boilerplate
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Rancho_Boilerplate
 */

if( !defined( 'ABSPATH' ) ) die();

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
  require( __DIR__ . '/vendor/autoload.php' );
}
