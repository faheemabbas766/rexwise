<?php

return array(
	'title'      => esc_html__( 'Footer Setting', 'braine' ),
	'id'         => 'footer_setting',
	'desc'       => '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'      => 'footer_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Footer Source Type', 'braine' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'braine' ),
				'e' => esc_html__( 'Elementor', 'braine' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'footer_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'braine' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'	=> -1
			],
			'required' => [ 'footer_source_type', '=', 'e' ],
		),
		array(
			'id'       => 'footer_style_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Footer Settings', 'braine' ),
			'required' => array( 'footer_source_type', '=', 'd' ),
		),
		array(
		    'id'       => 'footer_style_settings',
		    'type'     => 'image_select',
		    'title'    => esc_html__( 'Choose Footer Styles', 'braine' ),
		    'subtitle' => esc_html__( 'Choose Footer Styles', 'braine' ),
		    'options'  => array(

			    'footer_v1'  => array(
				    'alt' => esc_html__( 'Footer Style 1', 'braine' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/footer/footer_v1.png',
			    ),
				'footer_v2'  => array(
				    'alt' => esc_html__( 'Footer Style 2', 'braine' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/footer/footer_v2.png',
			    ),
				'footer_v3'  => array(
				    'alt' => esc_html__( 'Footer Style 3', 'braine' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/footer/footer_v3.png',
			    ),
				'footer_v4'  => array(
				    'alt' => esc_html__( 'Footer Style 4', 'braine' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/footer/footer_v4.png',
			    ),
			),
			'required' => array( 'footer_source_type', '=', 'd' ),
			'default' => 'footer_v1',
	    ),
		
		
		/***********************************************************************
								Footer Version 1 Start
		************************************************************************/
		array(
			'id'       => 'footer_v1_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Footer Style One Settings', 'braine' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v1' ),
		),
		//Newsletter Section
		array(
            'id' => 'show_footer_newsletter_section_v1',
            'type' => 'switch',
            'title' => esc_html__('Enable CTA Section', 'braine'),
            'default' => false,
			'required' => array( 'footer_style_settings', '=', 'footer_v1' ),
        ),
		//Shape Image
		array(
			'id'       => 'footer_form_icon_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Icon Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert icon image', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v1', '=', true ),
		),
		//Shape Image
		array(
			'id'       => 'footer_form_icon_image2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Icon Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert icon image', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v1', '=', true ),
		),
		array(
			'id'       => 'footer_form_card_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Card Icon Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert card icon image', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v1', '=', true ),
		),
		array(
			'id'      => 'footer_newsletter_title_v1',
			'type'    => 'text',
			'title'   => __( 'CTA Title', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v1', '=', true ),
		),
		array(
			'id'      => 'footer_newsletter_btn_title_v1',
			'type'    => 'text',
			'title'   => __( 'CTA Button Title', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v1', '=', true ),
		),
		array(
			'id'      => 'footer_newsletter_btn_link_v1',
			'type'    => 'text',
			'title'   => __( 'CTA Button Url', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v1', '=', true ),
		),
		array(
			'id'       => 'footer_form_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'CTA Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert cta image', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v1', '=', true ),
		),
		array(
			'id'       => 'footer_form_image2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'CTA Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert cta image', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v1', '=', true ),
		),
		
		//BG Image
		array(
			'id'       => 'footer_bg_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Footer Background Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert footer background image', 'braine' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v1' ),
		),
		
		array(
            'id' => 'show_bottom_footer_v1',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Bottom Footer', 'braine'),
            'default' => false,
            'required' => array( 'footer_style_settings', '=', 'footer_v1' ),
        ),
		array(
			'id'       => 'footer_logo_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert logo image', 'braine' ),
			'required' => array( 'show_bottom_footer_v1', '=', true ),
		),
		array(
			'id'      => 'footer_copyright_text_v1',
			'type'    => 'textarea',
			'title'   => __( 'Copyright Text', 'braine' ),
			'required' => array( 'show_bottom_footer_v1', '=', true ),
		),
		array(
            'id' => 'show_footer_social_icon_v1',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Footer Social Icons', 'braine'),
            'default' => false,
            'required' => array( 'show_bottom_footer_v1', '=', true ),
        ),
		
		/***********************************************************************
								Footer Version 2 Start
		************************************************************************/
		array(
			'id'       => 'footer_v2_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Footer Style Two Settings', 'braine' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v2' ),
		),
		//BG Image
		array(
			'id'       => 'footer_bg_image_v2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Footer Background Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert footer background image', 'braine' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v2' ),
		),		
		//Top Footer Section
		array(
            'id' => 'show_top_footer_v2',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Top Footer Section', 'braine'),
            'default' => false,
            'required' => array( 'footer_style_settings', '=', 'footer_v2' ),
        ),
		array(
			'id'       => 'footer_logo_image_v2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert logo image', 'braine' ),
			'required' => array( 'show_top_footer_v2', '=', true ),
		),
		array(
			'id'      => 'footer_social_title_v2',
			'type'    => 'text',
			'title'   => __( 'Social Icon Title', 'braine' ),
			'required' => array( 'show_top_footer_v2', '=', true ),
		),
		array(
            'id' => 'show_footer_social_icon_v2',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Footer Social Icons', 'braine'),
            'default' => false,
            'required' => array( 'show_top_footer_v2', '=', true ),
        ),
		
		array(
            'id' => 'show_bottom_footer_v2',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Bottom Footer', 'braine'),
            'default' => false,
            'required' => array( 'footer_style_settings', '=', 'footer_v2' ),
        ),
		array(
			'id'      => 'footer_copyright_text_v2',
			'type'    => 'textarea',
			'title'   => __( 'Copyright Text', 'braine' ),
			'required' => array( 'show_bottom_footer_v2', '=', true ),
		),
		
		/***********************************************************************
								Footer Version 3 Start
		************************************************************************/
		array(
			'id'       => 'footer_v3_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Footer Style Three Settings', 'braine' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v3' ),
		),
		//BG Image
		array(
			'id'       => 'footer_bg_image_v3',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Footer Background Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert footer background image', 'braine' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v3' ),
		),
		
		array(
            'id' => 'show_bottom_footer_v3',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Bottom Footer', 'braine'),
            'default' => false,
            'required' => array( 'footer_style_settings', '=', 'footer_v3' ),
        ),
		array(
			'id'       => 'footer_card_image_v3',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Apple Icon Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert apple icon image', 'braine' ),
			'required' => array( 'show_bottom_footer_v3', '=', true ),
		),
		array(
			'id'      => 'footer_card_image_link_v3',
			'type'    => 'text',
			'title'   => __( 'Apple Icon Image Link', 'braine' ),
			'required' => array( 'show_bottom_footer_v3', '=', true ),
		),
		array(
			'id'       => 'footer_card_image_v32',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Google Play Icon Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert google play icon image', 'braine' ),
			'required' => array( 'show_bottom_footer_v3', '=', true ),
		),
		array(
			'id'      => 'footer_card_image_link_v32',
			'type'    => 'text',
			'title'   => __( 'Google Play Icon Image Link', 'braine' ),
			'required' => array( 'show_bottom_footer_v3', '=', true ),
		),
		array(
			'id'      => 'footer_copyright_text_v3',
			'type'    => 'textarea',
			'title'   => __( 'Copyright Text', 'braine' ),
			'required' => array( 'show_bottom_footer_v3', '=', true ),
		),
		array(
            'id' => 'show_footer_social_icon_v3',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Footer Social Icons', 'braine'),
            'default' => false,
            'required' => array( 'show_bottom_footer_v3', '=', true ),
        ),
		
		/***********************************************************************
								Footer Version 4 Start
		************************************************************************/
		array(
			'id'       => 'footer_v4_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Footer Style Four Settings', 'braine' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v4' ),
		),
		//Newsletter Section
		array(
            'id' => 'show_footer_newsletter_section_v4',
            'type' => 'switch',
            'title' => esc_html__('Enable CTA Section', 'braine'),
            'default' => false,
			'required' => array( 'footer_style_settings', '=', 'footer_v4' ),
        ),
		//Shape Image
		array(
			'id'       => 'footer4_form_icon_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Icon Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert icon image', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v4', '=', true ),
		),
		//Shape Image
		array(
			'id'       => 'footer4_form_icon_image2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Icon Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert icon image', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v4', '=', true ),
		),
		array(
			'id'       => 'footer4_form_card_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Card Icon Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert card icon image', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v4', '=', true ),
		),
		array(
			'id'      => 'footer_newsletter_title_v4',
			'type'    => 'text',
			'title'   => __( 'CTA Title', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v4', '=', true ),
		),
		array(
			'id'      => 'footer_newsletter_btn_title_v4',
			'type'    => 'text',
			'title'   => __( 'CTA Button Title', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v4', '=', true ),
		),
		array(
			'id'      => 'footer_newsletter_btn_link_v4',
			'type'    => 'text',
			'title'   => __( 'CTA Button Url', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v4', '=', true ),
		),
		array(
			'id'       => 'footer4_form_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'CTA Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert cta image', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v4', '=', true ),
		),
		array(
			'id'       => 'footer4_form_image2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'CTA Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert cta image', 'braine' ),
			'required' => array( 'show_footer_newsletter_section_v4', '=', true ),
		),
		
		//BG Image
		array(
			'id'       => 'footer4_bg_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Footer Background Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert footer background image', 'braine' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v4' ),
		),
		
		array(
            'id' => 'show_bottom_footer_v4',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Bottom Footer', 'braine'),
            'default' => false,
            'required' => array( 'footer_style_settings', '=', 'footer_v4' ),
        ),
		array(
			'id'       => 'footer4_logo_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Logo Image', 'braine' ),
			'subtitle' => esc_html__( 'Insert logo image', 'braine' ),
			'required' => array( 'show_bottom_footer_v4', '=', true ),
		),
		array(
			'id'      => 'footer_copyright_text_v4',
			'type'    => 'textarea',
			'title'   => __( 'Copyright Text', 'braine' ),
			'required' => array( 'show_bottom_footer_v4', '=', true ),
		),
		array(
            'id' => 'show_footer_social_icon_v4',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Footer Social Icons', 'braine'),
            'default' => false,
            'required' => array( 'show_bottom_footer_v4', '=', true ),
        ),
		
		array(
			'id'       => 'footer_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'footer_source_type', '=', 'd' ],
		),
	),
);
