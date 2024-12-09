<?php

/**

 * Theme config file.

 *

 * @package BRAINE

 * @author  Themeim

 * @version 1.0

 * changed

 */



if ( ! defined( 'ABSPATH' ) ) {

	die( 'Restricted' );

}



$config = array();



$config['default']['braine_main_header'][] 	= array( 'braine_main_header_area', 99 );



$config['default']['braine_main_footer'][] 	= array( 'braine_main_footer_area', 99 );



$config['default']['braine_sidebar'][] 	    = array( 'braine_sidebar', 99 );



$config['default']['braine_banner'][] 	    = array( 'braine_banner', 99 );





return $config;

