<?php 

// Get The selected version
if( !function_exists( 'jh_get_the_version' ) ) {

    function jh_get_the_version( $version ) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', plugin_dir_url(__DIR__ ) . 'lib/jquery/core/'.$version.'/jquery.js', false, $version );
        wp_enqueue_script('jquery');
    }
}

// Loading jQuery version
if( !function_exists( 'jh_load_jquey_version' ) ) {

    function jh_load_jquey_version() { 

        switch ( jh_get_the_option('jh-jq-version') ) {
            case 'prev-jq-wp':

                    jh_get_the_version('1.12.4');

                break;

            case 'jq-wp-2-2-0':

                    jh_get_the_version('2.2.0');

                break;

            case 'jq-wp-2-1-0':

                    jh_get_the_version('2.1.0');

                break;
            
            case 'jq-wp-2-0-0':

                    jh_get_the_version('2.0.0');

                break;
            default : 
                wp_enqueue_script('jquery');
                break;

        }
    }
}

// Load in Frontend
if( jh_get_the_option('jh-override-jquery') && jh_get_the_option('jh-jq-version') ) {
    add_action( 'init', 'jh_load_jquey_version' );
}

// Load in Backend
if( jh_get_the_option('jh-override-jquery') && jh_get_the_option('jh-backend-jquery') && jh_get_the_option('jh-jq-version') ) {
    add_action( 'admin_enqueue_scripts', 'jh_load_jquey_version' );
}