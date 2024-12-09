<?php
$styles = [];
foreach(range(1, 28) as $val) {
    $styles[$val] = sprintf(esc_html__('Style %s', 'braine'), $val);
}
return  array(
    'title'      => esc_html__( 'General Setting', 'braine' ),
    'id'         => 'general_setting',
    'desc'       => '',
    'icon'       => 'el el-wrench',
    'fields'     => array(
        array(
            'id' => 'theme_preloader',
            'type' => 'switch',
            'title' => esc_html__('Enable Preloader', 'braine'),
            'default' => false,
        ),
		array(
			'id'      => 'preloader_text',
			'type'    => 'textarea',
			'title'   => __( 'Preloader Text', 'braine' ),
			'required' => array( 'theme_preloader', '=', true ),
		),		
		array(
            'id' => 'cursor_pointer',
            'type' => 'switch',
            'title' => esc_html__('Enable Cursor Pointer', 'braine'),
            'default' => false,
        ),
		array(
            'id' => 'show_scroltop',
            'type' => 'switch',
            'title' => esc_html__('ON/OFF Scroll To Top', 'braine'),
            'default' => true,
        ),
    ),
);

