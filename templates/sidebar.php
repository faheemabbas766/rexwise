<?php

/**
 * Sidebar Template
 *
 * @package    WordPress
 * @subpackage BRAINE
 * @author     Themeim
 * @version    1.0
 */

if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'sidebar_type' ) == 'e' AND $data->get( 'sidebar_elementor' ) ) {
	?>
    
	<div class="sidebar-side col-xl-4 col-lg-5 col-md-12 col-sm-12">
		<div class="sidebar-inner">
			<?php
			echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'sidebar_elementor' ) );
			?>
		</div>
	</div>

	<?php
	return false;

} else {
	$options = $data->get( 'sidebar' );
}
?>

<?php if ( is_active_sidebar( $options ) ) : ?>

	<div class="sidebar-side col-xl-4 col-lg-5 col-md-12 col-sm-12">
		<div class="sidebar-inner">
			<?php dynamic_sidebar( $options ); ?>
		</div>
	</div>

<?php endif; ?>



