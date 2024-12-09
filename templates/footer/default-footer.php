<?php
/**
 * Footer Template  File
 *
 * @package BRAINE
 * @author  Template Path
 * @version 1.0
 */

$options = braine_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );

$footer_form_icon_image = $options->get( 'footer_form_icon_image' );
$footer_form_icon_image = braine_set( $footer_form_icon_image, 'url', BRAINE_URI . '' );

$footer_form_icon_image2 = $options->get( 'footer_form_icon_image2' );
$footer_form_icon_image2 = braine_set( $footer_form_icon_image2, 'url', BRAINE_URI . '' );
$footer_form_image = $options->get( 'footer_form_image' );
$footer_form_image = braine_set( $footer_form_image, 'url', BRAINE_URI . '' );
$footer_form_image2 = $options->get( 'footer_form_image2' );
$footer_form_image2 = braine_set( $footer_form_image2, 'url', BRAINE_URI . '' );
$footer_form_card_image = $options->get( 'footer_form_card_image' );
$footer_form_card_image = braine_set( $footer_form_card_image, 'url', BRAINE_URI . '' );
$footer_bg_image = $options->get( 'footer_bg_image' );
$footer_bg_image = braine_set( $footer_bg_image, 'url', BRAINE_URI . '' );

$footer_logo_image = $options->get( 'footer_logo_image' );
$footer_logo_image = braine_set( $footer_logo_image, 'url', BRAINE_URI . '' );
?>

<?php if($options->get( 'show_footer_newsletter_section_v1' )){?>
<!-- CTA One -->
<section class="cta-one style-two">
    <div class="cta-one_shadow" style="background-image:url(<?php echo esc_url(get_template_directory_uri());?>/assets/images/icons/cta-shadow.png)"></div>
    <div class="auto-container">
        <div class="inner-container">
            <div class="cta-icon_one" style="background-image:url(<?php echo esc_url($footer_form_icon_image); ?>)"></div>
            <div class="cta-icon_two" style="background-image:url(<?php echo esc_url($footer_form_icon_image2); ?>)"></div>
            <?php if($footer_form_card_image){ ?>
            <div class="cta-one_card">
                <img src="<?php echo esc_url($footer_form_card_image); ?>" alt="<?php esc_attr_e('Awesome Image', 'braine')?>" />
            </div>
            <?php } ?>
            <div class="row clearfix">
                <!-- Column -->
                <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="cta-one_title-outer">
                        <?php if($options->get( 'footer_newsletter_title_v1' )){?><h2 class="cta-one_title"><?php echo wp_kses( $options->get( 'footer_newsletter_title_v1'), true ); ?></h2><?php } ?>
                        <?php if($options->get( 'footer_newsletter_btn_title_v1' )){?>
                        <div class="cta-one_button">
                            <a href="<?php echo esc_url( $options->get( 'footer_newsletter_btn_link_v1')); ?>" class="template-btn btn-style-three">
                                <span class="btn-wrap">
                                    <?php if($options->get( 'footer_newsletter_btn_title_v1' )){?><span class="text-one"><?php echo wp_kses( $options->get( 'footer_newsletter_btn_title_v1'), true ); ?></span><?php } ?>
                                    <?php if($options->get( 'footer_newsletter_btn_title_v1' )){?><span class="text-two"><?php echo wp_kses( $options->get( 'footer_newsletter_btn_title_v1'), true ); ?></span><?php } ?>
                                </span>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php if($footer_form_image || $footer_form_image2){ ?>
                <!-- Column -->
                <div class="cta-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="cta-one_image-outer">
                        <?php if($footer_form_image){ ?>
                        <div class="cta-one_cards">
                            <img src="<?php echo esc_url($footer_form_image); ?>" alt="<?php esc_attr_e('Awesome Image', 'braine')?>" />
                        </div>
                        <?php } ?>
                        <?php if($footer_form_image2){ ?>
                        <div class="image">
                            <img src="<?php echo esc_url($footer_form_image2); ?>" alt="<?php esc_attr_e('Awesome Image', 'braine')?>" />
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- End CTA One -->
<?php } ?>

<!-- Main Footer -->
<footer class="main-footer">
    <div class="footer_pattern" style="background-image: url('<?php echo esc_url($footer_bg_image); ?>')"></div>
    <?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
    <div class="auto-container">
        <div class="inner-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if($options->get('show_bottom_footer_v1')){ ?>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                <div class="footer-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($footer_logo_image); ?>" alt="<?php esc_attr_e('Awesome Image', 'braine')?>"></a></div>
                <?php if($options->get('footer_copyright_text_v1')){ ?><div class="footer-copyright"><?php echo wp_kses($options->get('footer_copyright_text_v1'), true); ?></div><?php } ?>
                <?php if( $options->get( 'show_footer_social_icon_v1' )): ?>
                <!-- Social Box -->
                <div class="footer-social_box">
                    <?php echo braine_get_social_icon(); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php } ?>
</footer>