<?php
add_action( 'acf/init', 'bpone_theme_init_block_types' );
	function bpone_theme_init_block_types() {

		// Check function exists.
		if ( function_exists( 'acf_register_block_type' ) ) {

			// register a home block.
			acf_register_block_type( array(
				'name'            => 'bpone-theme-myhome', // A unique name that identifies the block
				'title'           => __( 'My Home' ), // The display for your block
				'description'     => __( 'A custom home block.' ), //optional
				'render_template' => 'template-parts/blocks/content-myhome.php',
				'category'        => 'bpone-blocks',
				'icon'            => 'admin-appearance',// optional
				'keywords'        => array( 'quote', 'mention' ), //optional
				'mode'            => 'edit', //optional
				'supports'        => array( //optional
					'mode'  => 'false',
					'align' => false,
				),
			) );

			//register a about block
			acf_register_block_type(array(
				'name'            => 'bpone-theme-aboutme', // A unique name that identifies the block
				'title'           => __( 'About Me' ), // The display for your block
				'description'     => __( 'A custom about me block.' ), //optional
				'render_template' => 'template-parts/blocks/content-aboutme.php',
				'category'        => 'bpone-blocks',
				'icon'            => 'buddicons-topics',// optional
				'keywords'        => array( 'about', 'me' ), //optional
				'mode'            => 'edit', //optional
				'supports'        => array( //optional
					'mode'  => 'false',
					'align' => false,
				),

			));

        }
    }