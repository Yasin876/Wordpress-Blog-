<?php
//requiring theme customizer
require get_template_directory() . '/inc/customizer.php';

//to load scripts 
function load_scripts(){
    wp_enqueue_style('template' , get_template_directory_uri().'/css/template.css' , array() , '1.0' , 'all');
    //to load bootstrap js scripts
    wp_enqueue_script('bootstrap-js' , "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" , array('jquery') , '4.5.2',true);
    //to load css style
    wp_enqueue_style('bootstrap-css' , "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" , array() , '4.5.2' , 'all');
}

add_action( 'wp_enqueue_scripts' , 'load_scripts');

//main configuration function
function learnwp_config(){
    //registering the menus 
      register_nav_menus(
        array(
            "top_menu"=>"primary_menu",
            "footer_menu"=>"secondary_menu"
        )
        );

      //add customizing features to wordpress 
     $args = array(
        'height'=>225,
        'width'=>1980 
     );
     
     add_theme_support('custom-header' , $args);//to add header image to page 
     add_theme_support('post-thumbnails'); //to add thumbnais pictures 
     add_theme_support('post-formats',array(
      'video',
     'image',
     'aside',
     'gallery',
     'link',
     'quote',
     'status',
     'chat',
     'aside'));//to add post format in new post page

     add_theme_support('title-tag'); // to add title with CEO 
     add_theme_support('custom-logo' , array( //to add logo 
       'height'=>110 , 
       'width'=>200
     ));
     //translete operations 
     $textDomain = 'learnWP';
     load_theme_textdomain($textDomain , get_stylesheet_directory()."/langueages/");//alltakinden önce konulması zorunlu
     load_theme_textdomain($textDomain , get_template_directory()."/langueages/");
    
    

}

add_action('after_setup_theme' , 'learnwp_config',0);


//add widget to sidebar 
add_action( 'widgets_init' , 'learnwp_sidebars' );

function learnwp_sidebars(){
    //sidebar 1
    register_sidebar( $args = array(
        'name'=>'Home Page Sidebar',
        'id'=>'sidebar-1',
        'description'=>'This is homepage sidebar. You can add widgets here.',
        'before_widget'=>'<div class="widget-wrapper">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>'
    ) );
   //sidebar 2
     register_sidebar( $args = array(
        'name'=>'Blog Page Sidebar',
        'id'=>'sidebar-2',
        'description'=>'This is blog sidebar. You can add widgets here.',
        'before_widget'=>'<div class="widget-wrapper">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>'
    ) );
      //service 1
      register_sidebar( $args = array(
        'name'=>'Service1',
        'id'=>'service-1',
        'description'=>'Service 1 area ',
        'before_widget'=>'<div class="widget-wrapper">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>'
    ) );
        //service 2
       register_sidebar( $args = array(
        'name'=>'Service2',
        'id'=>'service-2',
        'description'=>'Service 2 area',
        'before_widget'=>'<div class="widget-wrapper">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>'
    ) );
       //service 3
      register_sidebar( $args = array(
        'name'=>'Service3',
        'id'=>'service-3',
        'description'=>'Service 3 area',
        'before_widget'=>'<div class="widget-wrapper">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>'
    ) );  

      //social media widget
      register_sidebar( $args = array(
        'name'=>'Social Media Icons ',
        'id'=>'social-media',
        'description'=>'social media wigets here ',
        'before_widget'=>'<div class="widget-wrapper">',
        'after_widget'=>'</div>',
        'before_title'=>'<h2 class="widget-title">',
        'after_title'=>'</h2>'
    ) );  
}





