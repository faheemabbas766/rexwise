<?php
/**
 * Blog Main File.
 *
 * @package BRAINE
 * @author  Themeim
 * @version 1.0
 */

get_header();
global $wp_query;
$data  = \BRAINE\Includes\Classes\Common::instance()->data( 'author' )->get();
$options = braine_WSH()->option();
	
	$author_icon_image   = $options->get( 'author_icon_image' );
	$author_icon_image   = braine_set( $author_icon_image, 'url' );	
	$author_icon_image2  = $options->get( 'author_icon_image2' );
	$author_icon_image2  = braine_set( $author_icon_image2, 'url' );
	$author_banner_shape_image  = $options->get( 'author_banner_shape_image' );
	$author_banner_shape_image  = braine_set( $author_banner_shape_image, 'url' );

$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$layout = ( $layout ) ? $layout : '';
$sidebar = ( $sidebar ) ? $sidebar : 'full';
if (is_active_sidebar( $sidebar )) {$layout = 'right';} else{$layout = 'full';}
$class = ( !$layout || $layout == 'full' ) ? 'content-side  col-lg-12 col-md-12 col-sm-12' : 'content-side col-lg-8 col-md-12 col-sm-12';
if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
?>
	
<?php if ( $data->get( 'enable_banner' ) ) : ?>
	<?php do_action( 'braine_banner', $data );?>
<?php else:?>
<!-- Page Title -->
<section class="page-title">
    <?php if($author_icon_image) :?><div class="page-title-icon" style="background-image:url('<?php echo esc_url($author_icon_image); ?>')"></div><?php endif; ?>
    <?php if($author_icon_image2) :?><div class="page-title-icon-two" style="background-image:url('<?php echo esc_url($author_icon_image2); ?>')"></div><?php endif; ?>
    <div class="page-title-shadow" <?php if($data->get( 'banner' )){ ?> style="background-image:url('<?php echo esc_url( $data->get( 'banner' ) ); ?>')"<?php } ?>></div>
    <?php if($author_banner_shape_image) :?><div class="page-title-shadow_two" style="background-image:url('<?php echo esc_url($author_banner_shape_image); ?>')"></div><?php endif; ?>
    <div class="auto-container">
        <h2><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( the_title( ) ); ?></h2>
        <ul class="bread-crumb clearfix">
            <?php echo braine_the_breadcrumb(); ?>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<?php endif;?>

<!--Sidebar Container-->
<div class="sidebar-page-container blog-page">
    <div class="auto-container">
        <div class="row clearfix">
        
			<?php if ( $data->get( 'layout' ) == 'left' ) { ?>
            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    <div class="sidebar-inner">
						<?php dynamic_sidebar( $sidebar ); ?>
                    </div>
                </aside>
            </div>
			<?php } ?>
			<div class="content-side <?php echo esc_attr( $class ); ?> <?php if ( $data->get( 'layout' ) == 'left' ) echo 'pl-0'; elseif ( $data->get( 'layout' ) == 'right' ) echo ''; ?>">
				<div class="blog-classic">
                    <div class="thm-unit-test">
                    
                        <?php
                            while ( have_posts() ) :
                                the_post();
                                braine_template_load( 'templates/blog/blog.php', compact( 'data' ) );
                            endwhile;
                            wp_reset_postdata();
                        ?>
                            
                    </div>
					<!--Pagination-->
					<div class="styled-pagination text-center">
						<?php braine_the_pagination( $wp_query->max_num_pages );?>
					</div>
				</div>
			</div>
            
			<?php if ( $data->get( 'layout' ) == 'right' ) { ?>
            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    <div class="sidebar-inner">
						<?php dynamic_sidebar( $sidebar ); ?>
                    </div>
                </aside>
            </div>
			<?php } ?>
            
		</div>
	</div>
</div>
<!--End blog area-->
	<?php
}
get_footer();
