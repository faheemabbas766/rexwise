<?php
return  array(
    'title'      => esc_html__( 'Category Page Settings', 'braine' ),
    'id'         => 'category_setting',
    'desc'       => '', 
    'subsection' => true,
    'fields'     => array(
	    array(
		    'id'      => 'category_source_type',
		    'type'    => 'button_set',
		    'title'   => esc_html__( 'Category Source Type', 'braine' ),
		    'options' => array(
			    'd' => esc_html__( 'Default', 'braine' ),
			    'e' => esc_html__( 'Elementor', 'braine' ),
		    ),
		    'default' => 'd',
	    ),
	    array(
		    'id'       => 'category_elementor_template',
		    'type'     => 'select',
		    'title'    => __( 'Template', 'braine' ),
		    'data'     => 'posts',
		    'args'     => [
			    'post_type' => [ 'elementor_library' ],
				'posts_per_page'=> -1,
		    ],
		    'required' => [ 'category_source_type', '=', 'e' ],
	    ),
	    array(
		    'id'       => 'category_default_st',
		    'type'     => 'section',
		    'title'    => esc_html__( 'Category Default', 'braine' ),
		    'indent'   => true,
		    'required' => [ 'category_source_type', '=', 'd' ],
	    ),
	    array(
		    'id'      => 'category_page_banner',
		    'type'    => 'switch',
		    'title'   => esc_html__( 'Show Banner', 'braine' ),
		    'desc'    => esc_html__( 'Enable to show banner on blog', 'braine' ),
		    'default' => true,
	    ),
	    array(
		    'id'       => 'category_banner_title',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Banner Section Title', 'braine' ),
		    'desc'     => esc_html__( 'Enter the title to show in banner section', 'braine' ),
		    'required' => array( 'category_page_banner', '=', true ),
	    ),
		array(
			'id'       => 'category_icon_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Icon Image Left', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( 'category_page_banner', '=', true ),
		),
		array(
			'id'       => 'category_icon_image2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Icon Image Right', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( 'category_page_banner', '=', true ),
		),
	    array(
		    'id'       => 'category_page_background',
		    'type'     => 'media',
		    'url'      => true,
		    'title'    => esc_html__( 'Background Image', 'braine' ),
		    'desc'     => esc_html__( 'Insert background image for banner', 'braine' ),
		    'required' => array( 'category_page_banner', '=', true ),
	    ),
		array(
			'id'       => 'category_banner_shape_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Banner Shape Image', 'braine' ),
			'desc'     => esc_html__( 'Insert shape background image for banner', 'braine' ),
			'required' => array( 'category_page_banner', '=', true ),
		),
	    array(
		    'id'       => 'category_sidebar_layout',
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
		    'id'       => 'category_page_sidebar',
		    'type'     => 'select',
		    'title'    => esc_html__( 'Sidebar', 'braine' ),
		    'desc'     => esc_html__( 'Select sidebar to show at blog listing page', 'braine' ),
		    'required' => array(
			    array( 'category_sidebar_layout', '=', array( 'left', 'right' ) ),
		    ),
		    'options'  => braine_get_sidebars(),
	    ),
	    array(
		    'id'       => 'category_default_ed',
		    'type'     => 'section',
		    'indent'   => false,
		    'required' => [ 'category_source_type', '=', 'd' ],
	    ),
    ),
);