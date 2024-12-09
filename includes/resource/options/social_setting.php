<?php
return  array(
    'title'      => esc_html__( 'Social Setting', 'braine' ),
    'id'         => 'social_setting',
    'desc'       => '',
    'icon'       => 'el el-share',
    'fields'     => array(
        array(
            'id'        => 'social_media_tabs_v3',
            'type'      => 'repeater',
            'icon' => 'el-icon-thumbs-up',
            'title'     => __('Add Social Media', 'braine'),
            'group_values' => true,
            'sortable' => true,
            'fields'    => array(
                array(
                    'id' => 'select_social_media',
                    'type' => 'select',
                    'data' => get_fontawesome_icons(),
                    'title' => esc_html__('Choose Social Media', 'braine'),
                ),
                array(
                    'id'      => 'link_social_media',
                    'type'    => 'text',
                    'title'   => __('Link', 'braine'),
                ),
            )
        ),
    ),
);