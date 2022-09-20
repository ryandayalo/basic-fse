<?php

if ( ! function_exists( 'basicfse_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Basic FSE 1.0
	 *
	 * @return void
	 */
	function basicfse_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'basicfse_theme_support' );

if ( ! function_exists( 'basicfse_styles' ) ) :

	function basicfse_styles() {
		// Stylesheet
		wp_enqueue_style('basicfse-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
		wp_enqueue_style('basicfse-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
	}

endif;

add_action( 'wp_enqueue_scripts', 'basicfse_styles' );


/****************************************
Custom Block Style - List 
****************************************/

register_block_style (
'core/list',
     array(
        'name'  => 'custom-list-block',
		'label' => __( 'Custom List Block', 'textdomain' ),
        'inline_style' => '.is-style-custom-list-block {
        	padding: 1rem 1rem 1rem 2rem; ;
	   		background: var(--wp--preset--color--secondary);
	   		border-radius: 1rem;
        }',
    )
);