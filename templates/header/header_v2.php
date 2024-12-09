<?php
$options = braine_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );

//Light Logo Settings
$light_color_logo = $options->get( 'light_color_logo' );
$light_color_logo_dimension = $options->get( 'light_color_logo_dimension' );

//Dark Logo Settings
$dark_color_logo = $options->get( 'dark_color_logo' );
$dark_color_logo_dimension = $options->get( 'dark_color_logo_dimension' );

$top_header_icon_image = $options->get( 'top_header_icon_image' );
$top_header_icon_image = braine_set( $top_header_icon_image, 'url', BRAINE_URI . '' );

$logo_type = '';
$logo_text = '';
$logo_typography = ''; ?>

<!-- Main Header -->
<header class="main-header header-style-two">
    <?php if($options->get('show_header_topbar_v2')){ ?>
    <!-- Header Top -->
    <div class="header-top">
        <div class="text">
            <?php if($top_header_icon_image){ ?><span class="icon"><img src="<?php echo esc_url($top_header_icon_image); ?>" alt="<?php esc_attr_e('Awesome Image', 'braine')?>" /></span><?php } ?>
            <?php echo wp_kses($options->get('top_header_text_v2'), true); ?> <a href="<?php echo esc_url($options->get('top_header_btn_link_v2'), true); ?>"><?php echo wp_kses($options->get('top_header_btn_title_v2'), true); ?>
            <i class="fas fa-angle-right fa-fw"></i></a>
        </div>
        <span class="header-top_cross fas fa-times fa-fw"></span>
    </div>
	<?php } ?>
    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    
                    <div class="nav-outer d-flex align-items-center flex-wrap">
                        <div class="logo-box">
                            <div class="logo"><?php echo braine_logo( $logo_type, $light_color_logo, $light_color_logo_dimension, $logo_text, $logo_typography ); ?></div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
                                        'container_class'=>'navbar-collapse collapse navbar-right',
                                        'menu_class'=>'nav navbar-nav',
                                        'fallback_cb'=>false,
                                        'items_wrap' => '%3$s',
                                        'container'=>false,
                                        'depth'=>'3',
                                        'walker'=> new Bootstrap_walker()
                                    )); ?>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Main Menu End-->
                    <div class="outer-box d-flex align-items-center flex-wrap">
						<?php if($options->get('show_btn_info_v2') || $options->get('show_btn_info2_v2')){ ?>
                        <!-- Button Box -->
                        <div class="main-header_buttons">
                            <?php if($options->get('show_btn_info_v2')){ ?>
                            <a href="<?php echo esc_url($options->get('btn_link_v2'), true); ?>" class="template-btn btn-style-two">
                                <span class="btn-wrap">
                                    <span class="text-one"><?php echo wp_kses($options->get('btn_title_v2'), true); ?></span>
                                    <span class="text-two"><?php echo wp_kses($options->get('btn_title_v2'), true); ?></span>
                                </span>
                            </a>
                            <?php } ?>
                            <?php if($options->get('show_btn_info2_v2')){ ?>
                            <a href="<?php echo esc_url($options->get('btn_link2_v2'), true); ?>" class="template-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one"><?php echo wp_kses($options->get('btn_title2_v2'), true); ?></span>
                                    <span class="text-two"><?php echo wp_kses($options->get('btn_title2_v2'), true); ?></span>
                                </span>
                            </a>
                            <?php } ?>
                        </div>
						<?php } ?>
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fas fa-times fa-fw"></span></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><?php echo braine_logo( $logo_type, $dark_color_logo, $dark_color_logo_dimension, $logo_text, $logo_typography ); ?></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
