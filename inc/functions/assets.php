<?php
/**
 * Enqueue scripts and styles
 * @return void
 * @since twnty twnty two
 * 
 */
/**
 * Enqueue styles and scripts
 */
 function bpone_scripts(){
     wp_enqueue_style('bpone-bootstrap',get_template_directory_uri() .'/assets/css/plugins/bootstrap.css',array(),wp_get_theme()->get('Version'));
     wp_enqueue_style('bpone-normalize',get_template_directory_uri() .'/assets/css/plugins/normalize.css',array(),wp_get_theme()->get('Version'));
     wp_enqueue_style('bpone-trans-ani',get_template_directory_uri() .'/assets/css/plugins/transition-animations.css',array(),wp_get_theme()->get('Version'));
     wp_enqueue_style('bpone-owl-carl',get_template_directory_uri() .'/assets/css/plugins/owl.carousel.css',array(),wp_get_theme()->get('Version'));
     wp_enqueue_style('bpone-magni-pop',get_template_directory_uri() .'/assets/css/plugins/magnific-popup.css',array(),wp_get_theme()->get('Version'));
     wp_enqueue_style('bpone-animate',get_template_directory_uri() .'/assets/css/plugins/animate.css',array(),wp_get_theme()->get('Version'));
     wp_enqueue_style('bpone-stroke',get_template_directory_uri() .'/assets/css/plugins/pe-icon-7-stroke/css/pe-icon-7-stroke.css',array(),wp_get_theme()->get('Version'));
     wp_enqueue_style('bpone-main',get_template_directory_uri() .'/assets/css/plugins/main.css',array(),wp_get_theme()->get('Version'));
    
     //  scripts

     wp_enqueue_script('bpone-jquery',get_template_directory_uri() .'/assets/js/plugins/jquery-3.6.0.min.js',array(),wp_get_theme()->get('Version'),false);
     wp_enqueue_script('bpone-modern-customj',get_template_directory_uri() .'/assets/js/plugins/modernizr.custom.js',array('jquery'),wp_get_theme()->get('Version'),false);
     wp_enqueue_script('bpone-bootstrap-minj',get_template_directory_uri() .'/assets/js/plugins/bootstrap.min.js',array('jquery'),wp_get_theme()->get('Version'),true);
     wp_enqueue_script('bpone-page-transj',get_template_directory_uri() .'/assets/js/plugins/page-transition.js',array('jquery'),wp_get_theme()->get('Version'),true);
     wp_enqueue_script('bpone-img-pkg',get_template_directory_uri() .'/assets/js/plugins/imagesloaded.pkgd.min.js',array('jquery'),wp_get_theme()->get('Version'),true);
     wp_enqueue_script('bpone-validatorj',get_template_directory_uri() .'/assets/js/plugins/validator.js',array('jquery'),wp_get_theme()->get('Version'),true);
     wp_enqueue_script('bpone-shufflej',get_template_directory_uri() .'/assets/js/plugins/jquery.shuffle.min.js',array('jquery'),wp_get_theme()->get('Version'),true);
     wp_enqueue_script('bpone-masonryj',get_template_directory_uri() .'/assets/js/plugins/masonry.pkgd.min.js',array('jquery'),wp_get_theme()->get('Version'),true);
     wp_enqueue_script('bpone-owlj',get_template_directory_uri() .'/assets/js/plugins/owl.carousel.min.js',array('jquery'),wp_get_theme()->get('Version'),true);
     wp_enqueue_script('bpone-magnificj',get_template_directory_uri() .'/assets/js/plugins/jquery.magnific-popup.min.js',array('jquery'),wp_get_theme()->get('Version'),true);
     wp_enqueue_script('bpone-hoverj',get_template_directory_uri() .'/assets/js/plugins/jquery.hoverdir.js',array('jquery'),wp_get_theme()->get('Version'),true);
     wp_enqueue_script('bpone-hoverj',get_template_directory_uri() .'/assets/js/plugins/jquery.hoverdir.js',array('jquery'),wp_get_theme()->get('Version'),true);
      wp_enqueue_script('bootstrap-jscaptcha','https://www.google.com/recaptcha/api.js',array('jquery'),'5.1.3',false);
    wp_enqueue_script('bpone-mainj',get_template_directory_uri() .'/assets/js/plugins/main.js',array('jquery'),wp_get_theme()->get('Version'),true);



    
    
    
    
   
    
   
    
  

// Threaded comment reply styles.
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

 }
 add_action('wp_enqueue_scripts','bpone_scripts');