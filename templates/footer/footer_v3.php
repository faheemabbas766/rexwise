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

$footer_bg_image_v3 = $options->get( 'footer_bg_image_v3' );
$footer_bg_image_v3 = braine_set( $footer_bg_image_v3, 'url', BRAINE_URI . '' );

$footer_card_image_v3 = $options->get( 'footer_card_image_v3' );
$footer_card_image_v3 = braine_set( $footer_card_image_v3, 'url', BRAINE_URI . '' );
$footer_card_image_v32 = $options->get( 'footer_card_image_v32' );
$footer_card_image_v32 = braine_set( $footer_card_image_v32, 'url', BRAINE_URI . '' );
?>

<!-- Main Footer -->
<footer class="main-footer style-three">
    <div class="footer_pattern" style="background-image: url('<?php echo esc_url($footer_bg_image_v3); ?>')"></div>
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
    <?php if($options->get('show_bottom_footer_v3')){ ?>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                <div class="apps-buttons d-flex align-items-center flex-wrap">
                    <?php if($footer_card_image_v3){ ?>
                    <a href="<?php echo wp_kses($options->get('footer_card_image_link_v3'), true); ?>"><img src="<?php echo esc_url($footer_card_image_v3); ?>" alt="<?php esc_attr_e('Awesome Image', 'braine')?>" /></a>
                    <?php } ?>
                    <?php if($footer_card_image_v32){ ?>
                    <a href="<?php echo wp_kses($options->get('footer_card_image_link_v32'), true); ?>"><img src="<?php echo esc_url($footer_card_image_v32); ?>" alt="<?php esc_attr_e('Awesome Image', 'braine')?>" /></a>
                    <?php } ?>
                </div>
                <?php if($options->get('footer_copyright_text_v3')){ ?><div class="footer-copyright"><?php echo wp_kses($options->get('footer_copyright_text_v3'), true); ?></div><?php } ?>
                <?php
					if( $options->get( 'show_footer_social_icon_v3' )):
				?>
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