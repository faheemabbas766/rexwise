<?php

return array(
	'title'      => esc_html__( '404 Page Settings', 'braine' ),
	'id'         => '404_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => '404_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( '404 Source Type', 'braine' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'braine' ),
				'e' => esc_html__( 'Elementor', 'braine' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => '404_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'braine' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
			],
			'required' => [ '404_source_type', '=', 'e' ],
		),
		array(
			'id'       => '404_default_st',
			'type'     => 'section',
			'title'    => esc_html__( '404 Default', 'braine' ),
			'indent'   => true,
			'required' => [ '404_source_type', '=', 'd' ],
		),
		array(
			'id'      => '404_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Banner', 'braine' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'braine' ),
			'default' => true,
		),		
		array(
			'id'       => '404_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'braine' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'braine' ),
			'required' => array( '404_page_banner', '=', true ),
		),
		array(
			'id'       => 'error_icon_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Icon Image Left', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( '404_page_banner', '=', true ),
		),
		array(
			'id'       => 'error_icon_image2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Icon Image Right', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( '404_page_banner', '=', true ),
		),
		array(
			'id'       => '404_page_background',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Background Image', 'braine' ),
			'desc'     => esc_html__( 'Insert background image for banner', 'braine' ),			
			'required' => array( '404_page_banner', '=', true ),
		),
		array(
			'id'       => 'error_shape_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Shape Image', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( '404_page_banner', '=', true ),
		),
		array(
			'id'       => 'error_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Error Image', 'braine' ),
			'desc'     => esc_html__( 'Insert error image for 404 page', 'braine' ),
		),
		array(
			'id'    => '404_page_heading',
			'type'  => 'text',
			'title' => esc_html__( '404 Page Heading', 'braine' ),
			'desc'  => esc_html__( 'Enter 404 section Page Heading that you want to show', 'braine' ),
		),
		array(
			'id'    => '404_page_title',
			'type'  => 'text',
			'title' => esc_html__( '404 Page Title', 'braine' ),
			'desc'  => esc_html__( 'Enter 404 section Page Title that you want to show', 'braine' ),
		),
		array(
			'id'    => '404_page_text',
			'type'  => 'textarea',
			'title' => esc_html__( '404 Page Text', 'braine' ),
			'desc'  => esc_html__( 'Enter 404 section Page Text that you want to show', 'braine' ),
		),
		array(
			'id'    => 'back_home_btn',
			'type'  => 'switch',
			'title' => esc_html__( 'Show Button', 'braine' ),
			'desc'  => esc_html__( 'Enable to show back to home button.', 'braine' ),
			'default'  => true,
		),
		array(
			'id'       => 'back_home_btn_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Button Label', 'braine' ),
			'desc'     => esc_html__( 'Enter back to home button label that you want to show.', 'braine' ),
			'default'  => esc_html__( 'Go back home now', 'braine' ),
			'required' => array( 'back_home_btn', '=', true ),
		),
		array(
			'id'     => '404_post_settings_end',
			'type'   => 'section',
			'indent' => false,
		),
	),
);