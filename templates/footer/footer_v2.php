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

$footer_bg_image_v2 = $options->get( 'footer_bg_image_v2' );
$footer_bg_image_v2 = braine_set( $footer_bg_image_v2, 'url', BRAINE_URI . '' );
$footer_logo_image_v2 = $options->get( 'footer_logo_image_v2' );
$footer_logo_image_v2 = braine_set( $footer_logo_image_v2, 'url', BRAINE_URI . '' );

?>

<!-- Main Footer -->
<footer class="main-footer style-two">
    <div class="footer_pattern" style="background-image: url('<?php echo esc_url($footer_bg_image_v2); ?>')"></div>
    <?php if($options->get('show_top_footer_v2')){ ?>
    <div class="footer-upper-box">
        <div class="auto-container">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <?php if($footer_logo_image_v2){ ?>
                <div class="footer-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($footer_logo_image_v2); ?>" alt="<?php esc_attr_e('Awesome Image', 'braine')?>"></a></div>
                <?php } ?>
                <!-- Social Box -->
                <div class="footer-social_box">
                    <?php if($options->get('footer_social_title_v2')){ ?><span><?php echo wp_kses($options->get('footer_social_title_v2'), true); ?></span><?php } ?>
                    <?php
						if( $options->get( 'show_footer_social_icon_v2' )):
					?>
					<?php echo braine_get_social_icon(); ?>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) { ?>
    <div class="auto-container">
        <div class="inner-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">
                    <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if($options->get('show_bottom_footer_v2')){ ?>
    <?php if($options->get('footer_copyright_text_v2')){ ?>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-center">
                <div class="footer-copyright"><?php echo wp_kses($options->get('footer_copyright_text_v2'), true); ?></div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php } ?>
</footer>
        

    
    
    