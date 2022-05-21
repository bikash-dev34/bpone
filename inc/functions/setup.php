<?php
/**
 * Functions and definitions
 * @package Wordpress
 * 
 */
//This theme requires WordPress 5.3 or later
// if (version_compare($GLOBALS['bp_version'],'5.3','<')){
//     require get_template_directory().'/inc/back-compat.php';
// }


if(!function_exists('bpone_theme_setup')){
    /**
     * Sets up theme defaults and registers support for various WordPress features
     * Note that this function is hooked into the after setup theme hook which runs before the init 
     * hook.    The init hook is too late for some features such as indicating support for pos thumbnails
     */
    function bpone_theme_setup(){
         
        /**
         * Make theme available for translation
         */
        //Registering our menus
        register_nav_menus(
            array(
                'primary-one'=>esc_html__('Primary menu')
            )
           
            );

            //customizing logo
            $argslogo=array(
                'height'=>106,
                'width'=>106
            );
            add_theme_support('custom-logo',$argslogo);
            add_theme_support('post-thumbnails');

    }
   


    
}

add_action('after_setup_theme','bpone_theme_setup',0); 
	


