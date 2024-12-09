<?php

return array(
	'title'  => esc_html__( 'Blog Page Settings', 'braine' ),
	'id'     => 'blog_setting',
	'desc'   => '',
	'icon'   => 'el el-indent-left',
	'fields' => array(
		array(
			'id'      => 'blog_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Blog Source Type', 'braine' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'braine' ),
				'e' => esc_html__( 'Elementor', 'braine' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'blog_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'braine' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
			],
			'required' => [ 'blog_source_type', '=', 'e' ],
		),

		array(
			'id'       => 'blog_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Blog Default', 'braine' ),
			'indent'   => true,
			'required' => [ 'blog_source_type', '=', 'd' ],
		),
		array(
			'id'      => 'blog_page_banner',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Banner', 'braine' ),
			'desc'    => esc_html__( 'Enable to show banner on blog', 'braine' ),
			'default' => true,
		),
		array(
			'id'       => 'blog_banner_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Banner Section Title', 'braine' ),
			'desc'     => esc_html__( 'Enter the title to show in banner section', 'braine' ),
			'required' => array( 'blog_page_banner', '=', true ),
		),
		array(
			'id'       => 'blog_icon_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Icon Image Left', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( 'blog_page_banner', '=', true ),
		),
		array(
			'id'       => 'blog_icon_image2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Icon Image Right', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( 'blog_page_banner', '=', true ),
		),
		array(
			'id'       => 'blog_page_background',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Background Image', 'braine' ),
			'desc'     => esc_html__( 'Insert background image for banner', 'braine' ),
			'required' => array( 'blog_page_banner', '=', true ),
		),
		array(
			'id'       => 'blog_banner_shape_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Shape Image', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( 'blog_page_banner', '=', true ),
		),
		
		array(
			'id'       => 'blog_sidebar_layout',
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
			'id'       => 'blog_page_sidebar',
			'type'     => 'select',
			'title'    => esc_html__( 'Sidebar', 'braine' ),
			'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'braine' ),
			'required' => array(
				array( 'blog_sidebar_layout', '=', array( 'left', 'right' ) ),
			),
			'options'  => braine_get_sidebars(),
		),
		array(
			'id'      => 'blog_post_author',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Post Author', 'braine' ),
			'desc'    => esc_html__( 'Enable to show post data on posts listing', 'braine' ),
			'default' => true,
		),
		array(
			'id'      => 'blog_post_comments',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Post Comment', 'braine' ),
			'desc'    => esc_html__( 'Enable to show post category on posts listing', 'braine' ),
			'default' => true,
		),
		array(
			'id'       => 'blog_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'blog_source_type', '=', 'd' ],
		),
	),
);