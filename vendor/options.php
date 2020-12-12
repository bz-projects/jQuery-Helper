<?php 

if ( ! defined( 'ABSPATH' )  ) { die; }

// Create Options
CSF::createOptions( jh_options_id, array(
  'menu_title'              => __('jQuery Helper', 'jh'),
  'menu_slug'               => 'jh_options',
  'theme'                   => 'light',
  'framework_title'         => __('jQuery Helper Settings', 'jh'),
  'footer_credit'           => __('<strong>&copy; Copyright 2020</strong> by <a href="https://www.benjamin-zekavica.de" target="_blank">Benjamin Zekavica</a>. All rights reserved!'),
  'show_bar_menu'           => false,
  'show_search'             => false,
));

// Load Options seperated
require( jh_url .'vendor/option/scripts.php');
require( jh_url .'vendor/option/readme.php');