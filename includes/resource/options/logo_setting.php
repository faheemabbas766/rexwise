<?php
return array(
	'title'      => esc_html__( 'Logo Setting', 'braine' ),
	'id'         => 'logo_setting',
	'desc'       => '',
	'subsection' => false,
	'fields'     => array(
		//Favicon Style
		array(
			'id'       => 'image_favicon',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Favicon', 'braine' ),
			'subtitle' => esc_html__( 'Insert site favicon image', 'braine' ),
			'default'  => array( 'url' => get_template_directory_uri() . '/assets/images/favicon.png' ),
		),
		//Light Logo Style
		array(
            'id' => 'normal_logo_show',
            'type' => 'switch',
            'title' => esc_html__('Enable Light Color Logo', 'braine'),
            'default' => true,
        ),
		array(
			'id'       => 'light_color_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Light Color Logo Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert site light color logo image', 'braine' ),
			'required' => array( 'normal_logo_show', '=', true ),
		),
		array(
			'id'       => 'light_color_logo_dimension',
			'type'     => 'dimensions',
			'title'    => esc_html__( 'Light Color Logo Dimentions', 'braine' ),
			'subtitle' => esc_html__( 'Select Light Color Logo Dimentions', 'braine' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'normal_logo_show', '=', true ),
		),
		
		//Dark Logo Style
		array(
            'id' => 'dark_logo_show',
            'type' => 'switch',
            'title' => esc_html__('Enable Dark Color Logo', 'braine'),
            'default' => true,
        ),
		array(
			'id'       => 'dark_color_logo',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Dark Color Logo Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert site dark color logo image', 'braine' ),
			'required' => array( 'dark_logo_show', '=', true ),
		),
		array(
			'id'       => 'dark_color_logo_dimension',
			'type'     => 'dimensions',
			'title'    => esc_html__( 'Dark Color Logo Dimentions', 'braine' ),
			'subtitle' => esc_html__( 'Select Dark Color Logo Dimentions', 'braine' ),
			'units'    => array( 'em', 'px', '%' ),
			'default'  => array( 'Width' => '', 'Height' => '' ),
			'required' => array( 'dark_logo_show', '=', true ),
		),
		
		
		array(
			'id'       => 'logo_settings_section_end',
			'type'     => 'section',
			'indent'      => false,
		),
	),
);
