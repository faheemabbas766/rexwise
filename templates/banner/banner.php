<?php
/**
 * Banner Template
 *
 * @package    WordPress
 * @subpackage Themeim
 * @author     Themeim
 * @version    1.0
 */

if ( $data->get( 'enable_banner' ) AND $data->get( 'banner_type' ) == 'e' AND ! empty( $data->get( 'banner_elementor' ) ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'banner_elementor' ) );

	return false;
}

$banner_icon_image   = $data->get( 'banner_icon_image' );
$banner_icon_image2   = $data->get( 'banner_icon_image2' );
$banner_shape_image   = $data->get( 'banner_shape_image' );

?>
<?php if ( $data->get( 'enable_banner' ) ) : ?>

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
        
<?php endif; ?>