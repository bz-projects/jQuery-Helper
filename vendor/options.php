<?php 

if ( ! defined( 'ABSPATH' )  ) { die; }

// Create Options
CSF::createOptions( jh_options_id, array(
  'menu_title'              => __('jQuery Helper', 'jh'),
  'menu_slug'               => 'jh_options',
  'framework_title'         => '<img src="'. plugin_dir_url( __DIR__ ).'img/logo.svg" />',
  'footer_credit'           => __('<strong>&copy; Copyright 2020</strong> by <a href="https://www.benjamin-zekavica.de" target="_blank">Benjamin Zekavica</a>. All rights reserved!'),
  'show_bar_menu'           => false,
  'show_sub_menu'           => false,
  'show_search'             => false,
  'show_reset_section'      => false,
  'menu_type'               => 'submenu',
  'menu_parent'             => 'options-general.php',
));

// Load Options seperated
require( jh_url .'vendor/option/scripts.php');