<?php get_header();
$data = \BRAINE\Includes\Classes\Common::instance()->data('single-service')->get(); 
?>

<!-- Page Title -->
<section class="page-title">
    <?php if($data->get( 'banner_icon_image' )) :?><div class="page-title-icon" style="background-image:url('<?php echo esc_url( $data->get( 'banner_icon_image' ) ); ?>')"></div><?php endif; ?>
    <?php if($data->get( 'banner_icon_image2' )) :?><div class="page-title-icon-two" style="background-image:url('<?php echo esc_url( $data->get( 'banner_icon_image2' ) ); ?>')"></div><?php endif; ?>
    <div class="page-title-shadow" <?php if($data->get( 'banner' )){ ?> style="background-image:url('<?php echo esc_url( $data->get( 'banner' ) ); ?>')"<?php } ?>></div>
    <?php if($data->get( 'banner_shape_image' )) :?><div class="page-title-shadow_two" style="background-image:url('<?php echo esc_url( $data->get( 'banner_shape_image' ) ); ?>')"></div><?php endif; ?>
    <div class="auto-container">
        <h2><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( the_title( ) ); ?></h2>
        <ul class="bread-crumb clearfix">
            <?php echo braine_the_breadcrumb(); ?>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<?php while (have_posts()) : the_post(); 
?>

<!--
=====================================================
    Service Details
=====================================================
-->
<!-- Services Detail -->
<section class="services-detail">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title style-four">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <div class="sec-title_title"><?php echo (get_post_meta( get_the_id(), 'service_subtitle', true ));?></div>
                    <h2 class="sec-title_heading"><?php echo (get_post_meta( get_the_id(), 'service_designation', true ));?></h2>
                </div>
                <div class="right-box">
                    <?php echo (get_post_meta( get_the_id(), 'service_top_description', true ));?>
                </div>
            </div>
        </div>
        <?php $service_detail_image = get_post_meta( get_the_id(), 'service_detail_image', true ); ?>
        <div class="service-detail_image">
            <img src="<?php echo wp_get_attachment_url($service_detail_image['id']);?>" alt="<?php esc_attr_e('Awesome Image', 'braine'); ?>" />
        </div>
    </div>
</section>
<!-- End Services One -->
<?php if(get_post_meta( get_the_id(), 'show_benefit_section', true )):?>
<!-- Services Two -->
<div class="services-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title style-four centered">
            <div class="sec-title_title"><?php echo (get_post_meta( get_the_id(), 'service_benefit_subtitle', true ));?></div>
            <h2 class="sec-title_heading"><?php echo (get_post_meta( get_the_id(), 'service_benefit_title', true ));?></h2>
        </div>
        <?php
			$iconss = get_post_meta(get_the_id(), 'service_benefit_tabs', true); if ($iconss) : 
		?>
        <div class="row clearfix">
			<?php
				for ( $i=0; $i < count( $iconss['select_benefit_tab_icon'] ); $i++ ) {
                $select_benefit_tab_icon = ( isset( $iconss['select_benefit_tab_icon'][$i] ) && !empty( $iconss['select_benefit_tab_icon'][$i] ) ) ? $iconss['select_benefit_tab_icon'][$i] : '';
				$tab_benefit_title = ( isset( $iconss['tab_benefit_title'][$i] ) && !empty( $iconss['tab_benefit_title'][$i] ) ) ? $iconss['tab_benefit_title'][$i] : '';
				$tab_benefit_text = ( isset( $iconss['tab_benefit_text'][$i] ) && !empty( $iconss['tab_benefit_text'][$i] ) ) ? $iconss['tab_benefit_text'][$i] : '';
			?>
            <!-- Service Block Four -->
            <div class="service-block_four col-lg-3 col-md-6 col-sm-12">
                <div class="service-block_four-inner">
                    <div class="service-block_four-icon">
                        <i class="<?php echo esc_attr(str_replace("icon ", " ", $select_benefit_tab_icon)); ?>"></i>
                    </div>
                    <h4 class="service-block_four-title"><?php echo esc_attr($tab_benefit_title); ?></h4>
                    <div class="service-block_four-text"><?php echo esc_attr($tab_benefit_text); ?></div>
                </div>
            </div>
			<?php } ?> 
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- End Services Two -->
<?php endif; ?>
<?php if(get_post_meta( get_the_id(), 'show_steps_section', true )):?>
<!-- Steps One -->
<section class="steps-one">
    <?php $service_steps_image = get_post_meta( get_the_id(), 'service_steps_image', true ); ?>
    <div class="steps-one_bg" style="background-image:url(<?php echo wp_get_attachment_url($service_steps_image['id']);?>)"></div>
    <div class="steps-one_icon" style="background-image:url(<?php echo esc_url(get_template_directory_uri());?>/assets/images/icons/step.png)"></div>
    <div class="auto-container">
        <div class="inner-container">
            <div class="circle-layer"></div>
            <div class="dots-layer">
                <span class="dot-one"></span>
                <span class="dot-two"></span>
            </div>
        
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="sec-title_title"><?php echo (get_post_meta( get_the_id(), 'service_steps_subtitle', true ));?></div>
                <h2 class="sec-title_heading"><?php echo (get_post_meta( get_the_id(), 'service_steps_title', true ));?></h2>
            </div>
            <div class="steps-one_button">
                <a href="<?php echo esc_url(get_post_meta( get_the_id(), 'service_steps_btn_link', true ));?>" class="template-btn btn-style-two">
                    <span class="btn-wrap">
                        <span class="text-one"><?php echo (get_post_meta( get_the_id(), 'service_steps_btn_title', true ));?></span>
                        <span class="text-two"><?php echo (get_post_meta( get_the_id(), 'service_steps_btn_title', true ));?></span>
                    </span>
                </a>
            </div>
            <div class="row clearfix">
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>
<!-- End Steps One -->
<?php endif; ?>
<?php if(get_post_meta( get_the_id(), 'show_problems_section', true )):?>
<!-- Solution One -->
<section class="solution-one">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title style-four">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <div class="sec-title_title"><?php echo (get_post_meta( get_the_id(), 'service_problems_subtitle', true ));?></div>
                    <h2 class="sec-title_heading"><?php echo (get_post_meta( get_the_id(), 'service_problems_title', true ));?></h2>
                </div>
                <div class="right-box">
                    <p><?php echo (get_post_meta( get_the_id(), 'service_problems_text', true ));?></p>
                    <?php $features_list = get_post_meta( get_the_id(), 'service_features_list', true );
						if(!empty($features_list)){
						$features_list = explode("\n", ($features_list)); 
					?>
					<ul class="solution-one_list">
						<?php foreach($features_list as $features): ?>
						   <li><i class="fas fa-check fa-fw"></i><?php echo wp_kses($features, true); ?></li>
						<?php endforeach; ?>
					</ul>
					<?php } ?>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="column col-lg-6 col-md-6 col-sm-12">
                <?php $service_problems_image = get_post_meta( get_the_id(), 'service_problems_image', true ); ?>
                <div class="service-detail_image-two">
                    <img src="<?php echo wp_get_attachment_url($service_problems_image['id']);?>" alt="<?php esc_attr_e('Awesome Image', 'braine'); ?>" />
                </div>
            </div>
            <div class="column col-lg-6 col-md-6 col-sm-12">
                <?php $service_problems_video_image = get_post_meta( get_the_id(), 'service_problems_video_image', true ); ?>
                <div class="service-detail_image-two">
                    <a href="<?php echo esc_url(get_post_meta( get_the_id(), 'service_problems_video_link', true ));?>" class="lightbox-video service-detail_play"><span class="fas fa-play fa-fw"><i class="ripple"></i></span></a>
                    <img src="<?php echo wp_get_attachment_url($service_problems_video_image['id']);?>" alt="<?php esc_attr_e('Awesome Image', 'braine'); ?>" />
                </div>
            </div>
        </div>

        <!-- Sec Title -->
        <div class="sec-title style-four">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <div class="sec-title_title"><?php echo (get_post_meta( get_the_id(), 'service_problems_subtitle2', true ));?></div>
                    <h2 class="sec-title_heading"><?php echo (get_post_meta( get_the_id(), 'service_problems_title2', true ));?></h2>
                </div>
                <div class="right-box">
                    <?php echo (get_post_meta( get_the_id(), 'service_problems_text2', true ));?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Solution One -->
<?php endif; ?>
<?php if(get_post_meta( get_the_id(), 'show_faq_section', true )):?>
<!-- Faq One -->
<section class="faq-one style-three">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Tab Column -->
            <div class="faq-one_title-column col-lg-5 col-md-12 col-sm-12">
                <div class="faq-one_title-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title"><?php echo (get_post_meta( get_the_id(), 'service_faq_subtitle', true ));?></div>
                        <h2 class="sec-title_heading"><?php echo (get_post_meta( get_the_id(), 'service_faq_title', true ));?></h2>
                        <div class="sec-title_text"><?php echo (get_post_meta( get_the_id(), 'service_faq_text', true ));?></div>
                    </div>
                    <div class="faq-one_button">
                        <a href="<?php echo esc_url(get_post_meta( get_the_id(), 'service_faq_btn_link', true ));?>" class="template-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one"><?php echo (get_post_meta( get_the_id(), 'service_faq_btn_title', true ));?></span>
                                <span class="text-two"><?php echo (get_post_meta( get_the_id(), 'service_faq_btn_title', true ));?></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Accordian Column -->
            <div class="faq-one_accordian-column col-lg-7 col-md-12 col-sm-12">
                <div class="faq-one_accordian-outer">
					<?php
						$iconss = get_post_meta(get_the_id(), 'service_faqs_tabs', true); if ($iconss) : 
					?>
                    <!-- Accordion Box -->
                    <ul class="accordion-box_two">
                        <?php
							for ( $i=0; $i < count( $iconss['tab_faq_title'] ); $i++ ) {
							$tab_faq_title = ( isset( $iconss['tab_faq_title'][$i] ) && !empty( $iconss['tab_faq_title'][$i] ) ) ? $iconss['tab_faq_title'][$i] : '';
							$tab_faq_text = ( isset( $iconss['tab_faq_text'][$i] ) && !empty( $iconss['tab_faq_text'][$i] ) ) ? $iconss['tab_faq_text'][$i] : '';
						?>        
                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon fas fa-plus fa-fw"></span></div><?php echo esc_attr($tab_faq_title); ?></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text"><?php echo esc_attr($tab_faq_text); ?></div>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
					<?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Faq One -->
<?php endif; ?>

<div class="more-options">
    <div class="auto-container">
        <!-- Post Share Options-->
        <div class="post-share-options">
            <div class="post-share-inner d-flex justify-content-between align-items-center flex-wrap">
                <?php
					$icons = get_post_meta(get_the_id(), 'service_feature_tags_tab', true); if ($icons) : 
				?>
                <div class="post-tags">
                	<?php
						for ( $i=0; $i < count( $icons['service_tags_titls'] ); $i++ ) {
						$service_tags_titls = ( isset( $icons['service_tags_titls'][$i] ) && !empty( $icons['service_tags_titls'][$i] ) ) ? $icons['service_tags_titls'][$i] : '';
						$service_tags_link = ( isset( $icons['service_tags_link'][$i] ) && !empty( $icons['service_tags_link'][$i] ) ) ? $icons['service_tags_link'][$i] : '';
					?>
                    <a href="<?php echo esc_url($service_tags_link); ?>"><?php echo esc_attr($service_tags_titls); ?></a> 
                    <?php } ?>
                </div>
                <?php endif; ?>
                <?php
					$icons = get_post_meta(get_the_id(), 'service_social_media_tabs', true); if ($icons) : 
				?>
                <ul class="social-links">
                    <?php
						for ( $i=0; $i < count( $icons['select_service_social_media'] ); $i++ ) {
						$select_service_social_media = ( isset( $icons['select_service_social_media'][$i] ) && !empty( $icons['select_service_social_media'][$i] ) ) ? $icons['select_service_social_media'][$i] : '';
						$service_link_social_media = ( isset( $icons['service_link_social_media'][$i] ) && !empty( $icons['service_link_social_media'][$i] ) ) ? $icons['service_link_social_media'][$i] : '';
					?>
                    <li><a href="<?php echo esc_url($service_link_social_media); ?>" class="fa-brands <?php echo esc_attr(str_replace("fa ", " ", $select_service_social_media)); ?> fa-fw"></a></li>
                    <?php } ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
		<?php if((get_previous_post()) || (get_next_post())): ?>
        <div class="service-detail_posts">
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <?php global $post; $prev_post = get_previous_post();
					if (!empty($prev_post)):
				?>
                <div class="new-post">
                    <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"><i class="fas fa-angle-left fa-fw"></i> <?php esc_html_e('Previous', 'braine');?></a>
                    <h4><?php echo wp_kses_post($prev_post->post_title); ?></h4>
                </div>
                <?php endif; ?>
                <?php global $post; $next_post = get_next_post();
					if (!empty($next_post)):
				?>
                <div class="new-post text-right">
                    <a href="<?php echo esc_url(get_the_permalink($next_post->ID)); ?>"><?php esc_html_e('next', 'braine');?> <i class="fas fa-angle-right fa-fw"></i></a>
                    <h4><?php echo wp_kses_post($next_post->post_title); ?></h4>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>