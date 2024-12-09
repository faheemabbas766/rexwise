<?php
/**
 * 404 page file
 *
 * @package    WordPress
 * @subpackage Braine
 * @author     Template Path <admin@template_path.com>
 * @version    1.0
 */

$allowed_html = wp_kses_allowed_html( 'post' );
?>
<?php get_header();
$data = \BRAINE\Includes\Classes\Common::instance()->data( '404' )->get();
$options = braine_WSH()->option();
	
	$error_shape_image   = $options->get( 'error_shape_image' );
	$error_shape_image   = braine_set( $error_shape_image, 'url' );	
	$error_icon_image  = $options->get( 'error_icon_image' );
	$error_icon_image  = braine_set( $error_icon_image, 'url' );
	$error_icon_image2  = $options->get( 'error_icon_image2' );
	$error_icon_image2  = braine_set( $error_icon_image2, 'url' );
	$error_image  = $options->get( 'error_image' );
	$error_image  = braine_set( $error_image, 'url' );
	

if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
?>   

<!-- Page Title -->
<section class="page-title">
    <?php if($error_icon_image) :?><div class="page-title-icon" style="background-image:url('<?php echo esc_url($error_icon_image); ?>')"></div><?php endif; ?>
    <?php if($error_icon_image2) :?><div class="page-title-icon-two" style="background-image:url('<?php echo esc_url($error_icon_image2); ?>')"></div><?php endif; ?>
    <div class="page-title-shadow" <?php if($data->get( 'banner' )){ ?> style="background-image:url('<?php echo esc_url( $data->get( 'banner' ) ); ?>')"<?php } ?>></div>
    <?php if($error_shape_image) :?><div class="page-title-shadow_two" style="background-image:url('<?php echo esc_url($error_shape_image); ?>')"></div><?php endif; ?>
    <div class="auto-container">
        <h2><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( the_title( ) ); ?></h2>
        <ul class="bread-crumb clearfix">
            <?php echo braine_the_breadcrumb(); ?>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Error One -->										
<section class="error-one" style="background-image:url('<?php echo esc_url($error_image); ?>')">
    <div class="auto-container">
        <h1>
			<?php 
                if( $options->get( '404_page_heading' ) ){
                    echo wp_kses( $options->get( '404_page_heading' ), true );
                }else{
                    esc_html_e( '404', 'braine' );
                }
            ?>
        </h1>
        <h2>
            <?php 
                if( $options->get( '404_page_title' ) ){
                    echo wp_kses( $options->get( '404_page_title' ), true );
                }else{
                    esc_html_e( 'Oops... It looks like you ‘re lost !', 'braine' );
                }
            ?>
        </h2>
        <div class="text">
            <?php 
                if( $options->get( '404_page_text' ) ){
                    echo wp_kses( $options->get( '404_page_text' ), true );
                }else{
                    esc_html_e( 'Oops! The page you are looking for does not exist. It might have been moved or deleted.', 'braine' );
                }
            ?>
        </div>
        <?php if ( $options->get( 'back_home_btn', true ) ) : ?>
        <!-- Button Box -->
        <div class="button-box text-center">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="template-btn btn-style-one">
                <span class="btn-wrap">
                    <span class="text-one">
                    	<?php 
							if( $options->get( 'back_home_btn_label' ) ){
								echo wp_kses( $options->get( 'back_home_btn_label' ), true );
							}else{
								esc_html_e( 'Go back home now', 'braine' );
							}
						?>
                    </span>
                    <span class="text-two">
                    	<?php 
							if( $options->get( 'back_home_btn_label' ) ){
								echo wp_kses( $options->get( 'back_home_btn_label' ), true );
							}else{
								esc_html_e( 'Go back home now', 'braine' );
							}
						?>
                    </span>
                </span>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- End Error One -->
         
<?php }
get_footer(); ?>
