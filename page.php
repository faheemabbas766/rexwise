<?php
/**
 * Default Template Main File.
 *
 * @package BRAINE
 * @author  Themeim
 * @version 1.0
 */

get_header();
$data  = \BRAINE\Includes\Classes\Common::instance()->data( 'single' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$layout = ( $layout ) ? $layout : '';
$sidebar = ( $sidebar ) ? $sidebar : 'full';
if (is_active_sidebar( $sidebar )) {$layout = 'right';} else{$layout = 'full';}
$class = ( !$layout || $layout == 'full' ) ? 'content-side  col-lg-12 col-md-12 col-sm-12' : 'content-side col-lg-8 col-md-12 col-sm-12';
?>

<?php if ( $data->get( 'enable_banner' ) ) : ?>
	<?php do_action( 'braine_banner', $data );?>
<?php else:?>
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
                            
                        <?php while ( have_posts() ): the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                        
                        <div class="clearfix"></div>
                        <?php
                        $defaults = array(
                            'before' => '<div class="paginate-links">' . esc_html__( 'Pages:', 'braine' ),
                            'after'  => '</div>',
        
                        );
                        wp_link_pages( $defaults );
                        ?>
                        <?php comments_template() ?>
                     
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
<!-- blog section with pagination -->
<?php get_footer(); ?>
