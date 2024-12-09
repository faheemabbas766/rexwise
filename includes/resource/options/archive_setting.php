<?php
return array(
	'title'      => esc_html__( 'Archive Page Settings', 'braine' ),
	'id'         => 'archive_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'archive_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Archive Source Type', 'braine' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'braine' ),
				'e' => esc_html__( 'Elementor', 'braine' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'archive_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'braine' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
			],
			'required' => [ 'archive_source_type', '=', 'e' ],
		),
		array(
			'id'       => 'archive_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Archive Default', 'braine' ),
			'indent'   => true,
			'required' => [ 'archive_source_type', '=', 'd' ],
		),
		array(
			'id'      => 'archive_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Banner', 'braine' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'braine' ),
			'default' => true,
		),
		array(
			'id'       => 'archive_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'braine' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'braine' ),
			'required' => array( 'archive_page_banner', '=', true ),
		),
		array(
			'id'       => 'archive_icon_images',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Icon Image Left', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( 'archive_page_banner', '=', true ),
		),
		array(
			'id'       => 'archive_icon_images2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Icon Image Right', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( 'archive_page_banner', '=', true ),
		),
		array(
			'id'       => 'archive_page_background',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Background Image', 'braine' ),
			'desc'     => esc_html__( 'Insert background image for banner', 'braine' ),
			'required' => array( 'archive_page_banner', '=', true ),
		),
		array(
			'id'       => 'archive_banner_shape_images',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Shape Image', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( 'archive_page_banner', '=', true ),
		),
		array(
			'id'       => 'archive_sidebar_layout',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Layout', 'braine' ),
			'subtitle' => esc_html__( 'Select main content and sidebar alignment.', 'braine' ),
			'options'  => array(
				'left'  => array(
					'alt' => esc_html__( '2 Column Left', 'braine' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/2cl.png',
				),
				'full'  => array(
					'alt' => esc_html__( '1 Column', 'braine' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/1col.png',
				),
				'right' => array(
					'alt' => esc_html__( '2 Column Right', 'braine' ),
					'img' => get_template_directory_uri() . '/assets/images/redux/2cr.png',
				),
			),
			'default' => 'right',
		),
		array(
			'id'       => 'archive_page_sidebar',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar', 'braine' ),
			'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'braine' ),
			'required' => array(
				array( 'archive_sidebar_layout', '=', array( 'left', 'right' ) ),
			),
			'options'  => braine_get_sidebars(),
		),
		array(
			'id'       => 'archive_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'archive_source_type', '=', 'd' ],
		),
	),
);