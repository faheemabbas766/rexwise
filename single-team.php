<?php get_header();
$data = \BRAINE\Includes\Classes\Common::instance()->data('single-team')->get(); 

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
<?php while (have_posts()) : the_post(); ?>

<!--
=====================================================
    Team Details
=====================================================
-->
<!-- Team Detail -->
<section class="team-detail">
    <div class="auto-container">
        <div class="row clearfix">
			<?php if(has_post_thumbnail()):?>
            <!-- Team Block One -->
            <div class="team-detail_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="team-detail_image-outer">
                    <div class="team-detail_image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                </div>
            </div>
			<?php endif; ?>
            <!-- Team Block One -->
            <div class="team-detail_content-column col-lg-6 col-md-12 col-sm-12">
                <div class="team-detail_content-outer">
                    <div class="team-detail_subtitle"><?php echo (get_post_meta( get_the_id(), 'team_top_heading', true ));?></div>
                    <h2 class="team-detail_title"><?php the_title(); ?></h2>
                    <div class="team-detail_text"><?php the_content();?></div>
                    <div class="team-detail_info-outer">
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-6">
                                <?php if(get_post_meta( get_the_id(), 'team_email_title', true ) || get_post_meta( get_the_id(), 'team_email_address', true )){ ?>
                                <div class="team-detail_info">
                                    <?php echo (get_post_meta( get_the_id(), 'team_email_title', true ));?>
                                    <span><?php echo (get_post_meta( get_the_id(), 'team_email_address', true ));?></span>
                                </div>
                                <?php } ?>
                                <?php if(get_post_meta( get_the_id(), 'team_address_title', true ) || get_post_meta( get_the_id(), 'team_address', true )){ ?>
                                <div class="team-detail_info">
                                    <?php echo (get_post_meta( get_the_id(), 'team_address_title', true ));?>
                                    <span><?php echo (get_post_meta( get_the_id(), 'team_address', true ));?></span>
                                </div>
                                <?php } ?>
                            </div>
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-6">
                                <?php if(get_post_meta( get_the_id(), 'team_phone_title', true ) || get_post_meta( get_the_id(), 'team_phone_no', true )){ ?>
                                <div class="team-detail_info">
                                    <?php echo (get_post_meta( get_the_id(), 'team_phone_title', true ));?>
                                    <span><?php echo (get_post_meta( get_the_id(), 'team_phone_no', true ));?></span>
                                </div>
                                <?php } ?>
                                <?php if(get_post_meta( get_the_id(), 'team_exp_title', true ) || get_post_meta( get_the_id(), 'team_experience', true )){ ?>
                                <div class="team-detail_info">
                                    <?php echo (get_post_meta( get_the_id(), 'team_exp_title', true ));?>
                                    <span><?php echo (get_post_meta( get_the_id(), 'team_experience', true ));?></span>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
					<?php if(get_post_meta( get_the_id(), 'team_btn_title', true )){ ?>
                    <div class="team-detail_button">
                        <a href="<?php echo esc_url(get_post_meta( get_the_id(), 'team_btn_link', true ));?>" class="template-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one"><?php echo (get_post_meta( get_the_id(), 'team_btn_title', true ));?></span>
                                <span class="text-two"><?php echo (get_post_meta( get_the_id(), 'team_btn_title', true ));?></span>
                            </span>
                        </a>
                    </div>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Detail -->
<?php if(get_post_meta( get_the_id(), 'show_experience_section', true )):?>
<!-- Team Detail Experiance -->
<section class="team-detail_experiance">
    <div class="auto-container">
        <div class="row clearfix">
			<?php if(get_post_meta( get_the_id(), 'team_experience_subtitle', true ) || get_post_meta( get_the_id(), 'team_experience_title', true )){ ?>
            <!-- Column -->
            <div class="column col-lg-6 col-md-6 col-sm-12">
                <!-- Sec Title -->
                <div class="sec-title style-four title-anim">
                    <?php if(get_post_meta( get_the_id(), 'team_experience_subtitle', true )){ ?><div class="sec-title_title"><?php echo (get_post_meta( get_the_id(), 'team_experience_subtitle', true ));?></div><?php } ?>
                    <?php if(get_post_meta( get_the_id(), 'team_experience_title', true )){ ?><h2 class="sec-title_heading"><?php echo (get_post_meta( get_the_id(), 'team_experience_title', true ));?></h2><?php } ?>
                </div>
            </div>
			<?php } ?>
            <!-- Column -->
            <div class="column col-lg-6 col-md-6 col-sm-12">
                <?php if(get_post_meta( get_the_id(), 'team_experience_text', true )){ ?><div class="sec-title_text"><?php echo (get_post_meta( get_the_id(), 'team_experience_text', true ));?></div><?php } ?>
                <?php
					$iconss = get_post_meta(get_the_id(), 'team_exp_tabs', true); if ($iconss) : 
				?>
                <!-- Skills -->
                <div class="default-skills">
					<?php
						for ( $i=0; $i < count( $iconss['team_exp_start'] ); $i++ ) {
						$team_exp_start = ( isset( $iconss['team_exp_start'][$i] ) && !empty( $iconss['team_exp_start'][$i] ) ) ? $iconss['team_exp_start'][$i] : '';
						$team_exp_stop = ( isset( $iconss['team_exp_stop'][$i] ) && !empty( $iconss['team_exp_stop'][$i] ) ) ? $iconss['team_exp_stop'][$i] : '';
						$team_exp_alphabet = ( isset( $iconss['team_exp_alphabet'][$i] ) && !empty( $iconss['team_exp_alphabet'][$i] ) ) ? $iconss['team_exp_alphabet'][$i] : '';
						$team_exp_funfact_title = ( isset( $iconss['team_exp_funfact_title'][$i] ) && !empty( $iconss['team_exp_funfact_title'][$i] ) ) ? $iconss['team_exp_funfact_title'][$i] : '';
					?>
                    <!-- Skill Item -->
                    <div class="default-skill-item">
                        <div class="default-skill-title"><?php echo esc_attr($team_exp_funfact_title); ?></div>
                        <div class="default-skill-bar">
                            <div class="default-bar-inner">
                                <div class="default-bar progress-line" data-width="<?php echo esc_attr($team_exp_stop); ?>">
                                    <div class="default-skill-percentage"></div>
                                </div>
                            </div>
                        </div>
                        <div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="<?php echo esc_attr($team_exp_stop); ?>"><?php echo esc_attr($team_exp_start); ?></span><?php echo esc_attr($team_exp_alphabet); ?></div>
                    </div>
					<?php } ?>                    
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Team Detail Experiance -->
<?php endif; ?>
<?php if(get_post_meta( get_the_id(), 'show_team_contact_form', true )):?>
<!-- Team Detail Form -->
<section class="team-detail_form">
    <div class="auto-container">
        <div class="row clearfix">
            <?php if(get_post_meta( get_the_id(), 'team_contact_subtitle', true ) || get_post_meta( get_the_id(), 'team_contact_title', true ) || get_post_meta( get_the_id(), 'team_contact_text', true )){ ?>
            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <!-- Sec Title -->
                <div class="sec-title style-four">
                    <?php if(get_post_meta( get_the_id(), 'team_contact_subtitle', true )){ ?><div class="sec-title_title"><?php echo (get_post_meta( get_the_id(), 'team_contact_subtitle', true ));?></div><?php } ?>
                    <?php if(get_post_meta( get_the_id(), 'team_contact_title', true )){ ?><h2 class="sec-title_heading"><?php echo (get_post_meta( get_the_id(), 'team_contact_title', true ));?></h2><?php } ?>
                    <?php if(get_post_meta( get_the_id(), 'team_contact_text', true )){ ?><div class="sec-title_text"><?php echo (get_post_meta( get_the_id(), 'team_contact_text', true ));?></div><?php } ?>
                </div>
            </div>
            <?php } ?>
            <?php if(get_post_meta( get_the_id(), 'team_contact_form_url', true )){ ?>
            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <div class="default-form">
                    <?php echo do_shortcode(get_post_meta( get_the_id(), 'team_contact_form_url', true ));?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Team Detail Form -->
<?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>