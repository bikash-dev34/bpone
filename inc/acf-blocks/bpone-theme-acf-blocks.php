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
					'mode'  => false,
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
					'mode'  => false,
					'align' => false,
				),

			));
			// register a resume block
			acf_register_block_type(array(
				'name'=>'bpone-theme-resume',
				'title'=>__('Resume'),
				'description'=>__('A custom resume block'),
				'render_template'=>'template-parts/blocks/content-resume.php',
				'category'        => 'bpone-blocks',
				'icon'            => 'admin-post',// optional
				'keywords'        => array( 'resume', 'cv' ), //optional
				'mode'            => 'edit', //optional
				'supports'        => array( //optional
					'mode'  => false,
					'align' => false,
				),
			));
			//register a portfolio
			acf_register_block_type(array(
				'name'            => 'bpone-theme-portfolio', // A unique name that identifies the block
				'title'           => __( 'Portfolio' ), // The display for your block
				'description'     => __( 'A custom portfolio block.' ), //optional
				'render_template' => 'template-parts/blocks/content-portfolio.php',
				'category'        => 'bpone-blocks',
				'icon'            => 'format-status',// optional
				'keywords'        => array( 'portfolio', 'me' ), //optional
				'mode'            => 'edit', //optional
				'supports'        => array( //optional
					'mode'  => false,
					'align' => false,
				),

			));

			//register a blog
			acf_register_block_type(array(
				'name'            => 'bpone-theme-blog', // A unique name that identifies the block
				'title'           => __( 'Blog' ), // The display for your block
				'description'     => __( 'A custom blog block.' ), //optional
				'render_template' => 'template-parts/blocks/content-blog.php',
				'category'        => 'bpone-blocks',
				'icon'            => 'welcome-write-blog',// optional
				'keywords'        => array( 'blog', 'post' ), //optional
				'mode'            => 'edit', //optional
				'supports'        => array( //optional
					'mode'  => false,
					'align' => false,
				),

			));
			//register a contact
			acf_register_block_type(array(
				'name'            => 'bpone-theme-contact', // A unique name that identifies the block
				'title'           => __( 'contact' ), // The display for your block
				'description'     => __( 'A custom contact block.' ), //optional
				'render_template' => 'template-parts/blocks/content-contact.php',
				'category'        => 'bpone-blocks',
				'icon'            => 'email',// optional
				'keywords'        => array( 'contact', 'info' ), //optional
				'mode'            => 'edit', //optional
				'supports'        => array( //optional
					'mode'  => false,
					'align' => false,
				),

			));

        }
    }