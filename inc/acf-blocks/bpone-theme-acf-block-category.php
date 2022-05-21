<?php
function bpone_theme_block_category($categories,$post){
    return array_merge(
        $categories,
        array(
            array(
                'slug'=>'bpone-blocks',
                'title'=>__('BP-Blocks','bpone-blocks'),
            ),
        )
    );
}
add_filter('block_categories','bpone_theme_block_category',10,2);