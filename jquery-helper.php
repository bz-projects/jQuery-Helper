<?php
/*
Plugin Name: jQuery Helper
Plugin URI:  https://wordpress.org/plugins/jquery-helper
Description: Helper to load older versions of jQuery.
Version:     1.0
Author:      Benjamin Zekavica
Author URI:  https://www.benjamin-zekavica.de
Text Domain: jh
Domain Path: /languages
License:     GPL2

jQuery Helper is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

jQuery Helper is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with jQuery Helper. If not, see license.txt .


*** jQuery Licence *** 
Copyright 2020 OpenJS Foundation and jQuery contributors. All rights reserved. See jQuery License for more information. 
The OpenJS Foundation has registered trademarks and uses trademarks. For a list of trademarks of the OpenJS Foundation, 
please see our Trademark Policy and Trademark List. Trademarks and logos not indicated on the list of OpenJS Foundation
trademarks are trademarks™ or registered® trademarks of their respective holders. Use of them does not imply any affiliation
with or endorsement by them. OpenJS Foundation Terms of Use, Privacy, and Cookie Policies also apply.


Copyright by:
(c) 2020 by Benjamin Zekavica. All rights reserved.

Imprint:
Benjamin Zekavica
Oranienstrasse 12
52066 Aachen

E-Mail: info@benjamin-zekavica.de
Web: www.benjamin-zekavica.de

I don't give support by Mail. Please write in the
community forum for questions and problems.
*/

if ( !defined( 'ABSPATH' ) ) exit;

// Globals
define('jh_url', plugin_dir_path( __FILE__ ) );
define('jh_wp_ver', get_bloginfo( 'version' ) );
define('jh_options_id', '_jh_options' );

// Require Options 
require_once( jh_url .'lib/options/init.php');
require_once( jh_url .'vendor/options.php');

// Functions 
require_once( jh_url .'dist/func.php');