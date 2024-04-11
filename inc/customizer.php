<?php

/**
 * Resturant Theme Customizer
 * @package Resturant Theme
 */

 function resturant_theme_customizer( $wp_customize ){

	// Copyright Section

	$wp_customize->add_section(
		'sec_banner', array(
			'title'			=> __( 'Buttons Text','Resturant Theme' ),
			'description'	=> __( 'Buttons Section','Resturant Theme' )
		)
	);

			// Field 1 - Button Text Box
			$wp_customize->add_setting(
				'set_banner1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_banner1', array(
					'label'			=> __( 'ButtonText1', 'Resturant Theme' ),
					'description'	=> __( 'Please, add your text information here', 'Resturant Theme' ),
					'section'		=> 'sec_banner',
					'type'			=> 'text'
				)
			);
            // Field 2 - Button Text Box
			$wp_customize->add_setting(
				'set_banner2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_banner2', array(
					'label'			=> __( 'ButtonText2', 'Resturant Theme' ),
					'description'	=> __( 'Please, add your text information here', 'Resturant Theme' ),
					'section'		=> 'sec_banner',
					'type'			=> 'text'
				)
			);

            /*----------------------------------------------------------------------------------------------*/
	// Slider Section

	$wp_customize->add_section(
		'sec_about3', array(
			'title'			=> __( 'About3 Settings', 'Resturant Theme' ),
			'description'	=> __( 'About3 Section', 'Resturant Theme' )
		)
	);     

	        // Field 1 - Slider Page Number 1

			$wp_customize->add_setting(
				'set_about3', array(
					'type'					=> 'theme_mod',
					'default'				=> ''
				)
			);

			$wp_customize->add_control(
				'set_about3', array(
					'label'			=> __( 'Set About3 Image','Resturant Theme' ),
					'description'	=> __( 'Set About3 Image','Resturant Theme' ),
					'section'		=> 'sec_about3',
					'type'			=> 'dropdown-pages'
				)
			);

        }
            add_action( 'customize_register', 'resturant_theme_customizer' );
            ?>