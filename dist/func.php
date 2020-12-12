<?php 

$option = get_option( jh_options_id );

function jh_get_version( $version ) {
    wp_register_script('jquery', plugin_dir_url(__DIR__ ) . 'lib/jquery/core/'.$version.'/jquery.js', false, $version );
}

// Loading jQuery version
function jh_load_jquey_version() {

    wp_deregister_script('jquery');

    switch ( $option['jh-jq-version'] ) {
        case 'prev-jq-wp':
                jh_get_version('1.12.4');
            break;

        case 'jq-wp-2-2-0':
                jh_get_version('2.2.0');
            break;

        case 'jq-wp-2-1-0':
                jh_get_version('2.1.0');
            break;
        
        case 'jq-wp-2-0-0':
                jh_get_version('2.0.0');
            break;

        default:
                jh_get_version('1.12.4');
            break;
    }

    wp_enqueue_script('jquery');
}

// Load in Frontend
if( $option['jh-override-jquery'] ) {
    add_action( 'init', 'jh_load_jquey_version' );
}

// Load in Backend
if( $option['jh-override-jquery'] && $option['jh-backend-jquery']  ) {
    add_action( 'admin_enqueue_scripts', 'jh_load_jquey_version' );
}