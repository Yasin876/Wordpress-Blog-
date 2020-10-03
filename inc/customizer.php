<?php 

function learnwp_customizer($wp_customize){
    //copyright 
    $wp_customize->add_section('sec_copyright' , array(
        'title'=>'Copyrigt',
        'description'=>'Please type here your copyright'
    ));

    $wp_customize->add_setting('set_copyright' , array(
        'type'=>'theme_mod',
        'default'=>'Copyright X - All rights reserved',
        'sanitize_callback'=>'esc_attr'
    ));
    $wp_customize->add_control('ctrl_copyright' , array(
        'label'=>'Copyright information',
        'description'=>'Please type your copyright here',
        'section'=>'sec_copyright',
        'settings'=>'set_copyright',
        'type'=>'text'
    ));

    //map api key 
     $wp_customize->add_section('sec_map' , array(
        'title'=>'Map',
        'description'=>'The Map Section'
    ));

    $wp_customize->add_setting('set_map_apikey' , array(
        'type'=>'theme_mod',
        'default'=>'',
        'sanitize_callback'=>'esc_attr'
    ));


    $wp_customize->add_control('ctrl_map_apikey' , array(
        'label'=>'Google maps api key',
        'description'=>'Get your key ....',
        'section'=>'sec_map',
        'settings'=>'set_map_apikey',
        'type'=>'text'
    ));


}

add_action( 'customize_register' , 'learnwp_customizer' );