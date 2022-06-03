<?php
/**
 * Load all the required files
 */
$files_loader=array(
    'inc/functions/assets.php',
    'inc/functions/setup.php',
    'inc/functions/acf-options.php',
    'inc/functions/custom-post-types.php',    
    'inc/acf-blocks/bpone-theme-acf-block-category.php',
	'inc/acf-blocks/bpone-theme-acf-blocks.php',
	'inc/acf-blocks/bpone-theme-render-callback.php',
    // 'inc/functions/walker.php',
);
/**
 * Load the file
 */
foreach ($files_loader as $file){
    if (file_exists(get_template_directory() .'/' . $file )){
        locate_template($file,true,true);
    }
}
unset($file);