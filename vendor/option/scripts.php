<?php 

CSF::createSection( jh_options_id, array(
    'title'         => __('Main Settings', 'jh'),
    'icon'          => 'fas fa-sliders-h',
    'fields'        => array(

        array(
            'type'    => 'heading',
            'content' =>  __('jQuery version settings', 'jh'),
        ),

        array(
            'type'    => 'content',
            'content' => __('In this panel you can restore your jQuery WordPress version.<br /> <strong>If you have some WordPress problems please than use the <span style="color: #ad000c;">Legacy version of jQuery 1.12.14<span></strong>.', 'jh'),
        ),

        array(
            'id'    => 'jh-override-jquery',
            'type'  => 'switcher',
            'title' => __('Override WordPress jQuery Core version', 'jh'),
        ),

        array(
            'id'            => 'jh-jq-version',
            'type'          => 'select',
            'title'         => __('jQuery Core version', 'jh'),
            'dependency'    => array( 'jh-override-jquery', '==', 'true', 'all' ),
            'placeholder'   => __('Choose your version', 'jh'),
            'options'       => array(
                'prev-jq-wp'    =>  __('WordPress Legacy  - jQuery Core 1.12.4', 'jh'),
                'jq-wp-2-2-0'   =>  __('jQuery Core 2.2.0', 'jh'),
                'jq-wp-2-1-0'   =>  __('jQuery Core 2.1.0', 'jh'),
                'jq-wp-2-0-0'   =>  __('jQuery Core 2.0.0', 'jh'),
            ),
        ),

        array(
            'id'    => 'jh-backend-jquery',
            'type'  => 'switcher',
            'dependency'    => array( 'jh-override-jquery', '==', 'true', 'all' ),
            'title' => __('Override jQuery in Backend too', 'jh'),
        ),
    )
) );