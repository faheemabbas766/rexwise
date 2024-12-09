<?php
return array(
	'title'      => esc_html__( 'Header Setting', 'braine' ),
	'id'         => 'headers_setting',
	'desc'       => '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'      => 'header_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Header Source Type', 'braine' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'braine' ),
				'e' => esc_html__( 'Elementor', 'braine' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'header_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'braine' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'	=> -1
			],
			'required' => [ 'header_source_type', '=', 'e' ],
		),
		array(
			'id'       => 'header_style_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Settings', 'braine' ),
			'required' => array( 'header_source_type', '=', 'd' ),
		),

		//Header Settings
		array(
		    'id'       => 'header_style_settings',
		    'type'     => 'image_select',
		    'title'    => esc_html__( 'Choose Header Styles', 'braine' ),
		    'subtitle' => esc_html__( 'Choose Header Styles', 'braine' ),
		    'options'  => array(

			    'header_v1'  => array(
				    'alt' => esc_html__( 'Header Style 1', 'braine' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header_v1.png',
			    ),
			    'header_v2'  => array(
				    'alt' => esc_html__( 'Header Style 2', 'braine' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header_v2.png',
			    ),
				'header_v3'  => array(
				    'alt' => esc_html__( 'Header Style 3', 'braine' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header_v3.png',
			    ),
				'header_v4'  => array(
				    'alt' => esc_html__( 'Header Style 4', 'braine' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header_v4.png',
			    ),
			),
			'required' => array( 'header_source_type', '=', 'd' ),
			'default' => 'header_v4',
	    ),

		/***********************************************************************
								Header Version 1 Start
		************************************************************************/
		array(
			'id'       => 'header_v1_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style One Settings', 'braine' ),
			'required' => array( 'header_style_settings', '=', 'header_v1' ),
		),
		//Contact Button Info
		array(
            'id' => 'show_btn_info_v1',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Contact Button Info', 'braine'),
            'default' => false,
            'required' => array( 'header_style_settings', '=', 'header_v1' ),
        ),	
		array(
			'id'      => 'btn_title_v1',
			'type'    => 'text',
			'title'   => __( 'Contact Button Title', 'braine' ),
			'required' => array( 'show_btn_info_v1', '=', true ),
		),
		array(
			'id'      => 'btn_link_v1',
			'type'    => 'text',
			'title'   => __( 'Contact Button Line', 'braine' ),
			'required' => array( 'show_btn_info_v1', '=', true ),
		),
		//Join Now Button Info
		array(
            'id' => 'show_btn_info2_v1',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Join Now Button Info', 'braine'),
            'default' => false,
            'required' => array( 'header_style_settings', '=', 'header_v1' ),
        ),	
		array(
			'id'      => 'btn_title2_v1',
			'type'    => 'text',
			'title'   => __( 'Join Now Button Title', 'braine' ),
			'required' => array( 'show_btn_info2_v1', '=', true ),
		),
		array(
			'id'      => 'btn_link2_v1',
			'type'    => 'text',
			'title'   => __( 'Join Now Button Line', 'braine' ),
			'required' => array( 'show_btn_info2_v1', '=', true ),
		),		
		
		/***********************************************************************
								Header Version 2 Start
		************************************************************************/
		array(
			'id'       => 'header_v2_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style Two Settings', 'braine' ),
			'required' => array( 'header_style_settings', '=', 'header_v2' ),
		),
		//Header Topbar
		array(
            'id' => 'show_header_topbar_v2',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Header Top', 'braine'),
            'default' => false,
            'required' => array( 'header_style_settings', '=', 'header_v2' ),
        ),	
		//Icon Image
		array(
			'id'       => 'top_header_icon_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Icon Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert icon image', 'braine' ),
			'required' => array( 'show_header_topbar_v2', '=', true ),
		),
		array(
			'id'      => 'top_header_text_v2',
			'type'    => 'text',
			'title'   => __( 'Description', 'braine' ),
			'required' => array( 'show_header_topbar_v2', '=', true ),
		),
		//Get Started Today Button Info
		array(
			'id'      => 'top_header_btn_title_v2',
			'type'    => 'text',
			'title'   => __( 'Get Started Today Button Title', 'braine' ),
			'required' => array( 'show_header_topbar_v2', '=', true ),
		),
		array(
			'id'      => 'top_header_btn_link_v2',
			'type'    => 'text',
			'title'   => __( 'Get Started Today Button Link', 'braine' ),
			'required' => array( 'show_header_topbar_v2', '=', true ),
		),		
		//Contact Button Info
		array(
            'id' => 'show_btn_info_v2',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Contact Button Info', 'braine'),
            'default' => false,
            'required' => array( 'header_style_settings', '=', 'header_v2' ),
        ),	
		array(
			'id'      => 'btn_title_v2',
			'type'    => 'text',
			'title'   => __( 'Contact Button Title', 'braine' ),
			'required' => array( 'show_btn_info_v2', '=', true ),
		),
		array(
			'id'      => 'btn_link_v2',
			'type'    => 'text',
			'title'   => __( 'Contact Button Line', 'braine' ),
			'required' => array( 'show_btn_info_v2', '=', true ),
		),
		//Join Now Button Info
		array(
            'id' => 'show_btn_info2_v2',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Join Now Button Info', 'braine'),
            'default' => false,
            'required' => array( 'header_style_settings', '=', 'header_v2' ),
        ),	
		array(
			'id'      => 'btn_title2_v2',
			'type'    => 'text',
			'title'   => __( 'Join Now Button Title', 'braine' ),
			'required' => array( 'show_btn_info2_v2', '=', true ),
		),
		array(
			'id'      => 'btn_link2_v2',
			'type'    => 'text',
			'title'   => __( 'Join Now Button Line', 'braine' ),
			'required' => array( 'show_btn_info2_v2', '=', true ),
		),
		
		/***********************************************************************
								Header Version 3 Start
		************************************************************************/
		array(
			'id'       => 'header_v3_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style Three Settings', 'braine' ),
			'required' => array( 'header_style_settings', '=', 'header_v3' ),
		),
		//Social Icon
		array(
            'id' => 'show_header_social_icon_v3',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Header Social Icons', 'braine'),
            'default' => false,
            'required' => array( 'header_style_settings', '=', 'header_v3' ),
        ),
		//Contact Button Info
		array(
            'id' => 'show_btn_info_v3',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Contact Button Info', 'braine'),
            'default' => false,
            'required' => array( 'header_style_settings', '=', 'header_v3' ),
        ),	
		array(
			'id'      => 'btn_title_v3',
			'type'    => 'text',
			'title'   => __( 'Contact Button Title', 'braine' ),
			'required' => array( 'show_btn_info_v3', '=', true ),
		),
		array(
			'id'      => 'btn_link_v3',
			'type'    => 'text',
			'title'   => __( 'Contact Button Line', 'braine' ),
			'required' => array( 'show_btn_info_v3', '=', true ),
		),
		//Join Now Button Info
		array(
            'id' => 'show_btn_info2_v3',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Join Now Button Info', 'braine'),
            'default' => false,
            'required' => array( 'header_style_settings', '=', 'header_v3' ),
        ),	
		array(
			'id'      => 'btn_title2_v3',
			'type'    => 'text',
			'title'   => __( 'Join Now Button Title', 'braine' ),
			'required' => array( 'show_btn_info2_v3', '=', true ),
		),
		array(
			'id'      => 'btn_link2_v3',
			'type'    => 'text',
			'title'   => __( 'Join Now Button Line', 'braine' ),
			'required' => array( 'show_btn_info2_v3', '=', true ),
		),
		
		/***********************************************************************
								Header Version 4 Start
		************************************************************************/
		array(
			'id'       => 'header_v4_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style Four Settings', 'braine' ),
			'required' => array( 'header_style_settings', '=', 'header_v4' ),
		),
		//Contact Button Info
		array(
            'id' => 'show_btn_info_v4',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Contact Button Info', 'braine'),
            'default' => false,
            'required' => array( 'header_style_settings', '=', 'header_v4' ),
        ),	
		array(
			'id'      => 'btn_title_v4',
			'type'    => 'text',
			'title'   => __( 'Contact Button Title', 'braine' ),
			'required' => array( 'show_btn_info_v4', '=', true ),
		),
		array(
			'id'      => 'btn_link_v4',
			'type'    => 'text',
			'title'   => __( 'Contact Button Line', 'braine' ),
			'required' => array( 'show_btn_info_v4', '=', true ),
		),
		//Join Now Button Info
		array(
            'id' => 'show_btn_info2_v4',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Join Now Button Info', 'braine'),
            'default' => false,
            'required' => array( 'header_style_settings', '=', 'header_v4' ),
        ),	
		array(
			'id'      => 'btn_title2_v4',
			'type'    => 'text',
			'title'   => __( 'Join Now Button Title', 'braine' ),
			'required' => array( 'show_btn_info2_v4', '=', true ),
		),
		array(
			'id'      => 'btn_link2_v4',
			'type'    => 'text',
			'title'   => __( 'Join Now Button Line', 'braine' ),
			'required' => array( 'show_btn_info2_v4', '=', true ),
		),	
			
		array(
			'id'       => 'header_style_section_end',
			'type'     => 'section',
			'indent'      => false,
			'required' => [ 'header_source_type', '=', 'd' ],
		),
	),
);
