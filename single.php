<?php
/**
 * Blog Post Main File.
 *
 * @package BRAINE
 * @author  Template Path
 * @version 1.0
 */

get_header();
$options = braine_WSH()->option();

$data    = \BRAINE\Includes\Classes\Common::instance()->data( 'single' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$layout = ( $layout ) ? $layout : '';
$sidebar = ( $sidebar ) ? $sidebar : 'full';
if (is_active_sidebar( $sidebar )) {$layout = 'right';} else{$layout = 'full';}
$class = ( !$layout || $layout == 'full' ) ? 'content-side  col-lg-12 col-md-12 col-sm-12' : 'content-side col-lg-8 col-md-12 col-sm-12';
if ( class_exists( '\Elementor\Plugin' ) && $data->get( 'tpl-type' ) == 'e') {
	
	while(have_posts()) {
	   the_post();
	   the_content();
    }

} else {
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
            <div class="content-side <?php echo esc_attr( $class ); ?>">
            	
				<?php while ( have_posts() ) : the_post(); ?>				
                <div class="blog-detail">                	
                    <div class="thm-unit-test"> 
                    	<div class="blog-detail_inner">
                            <?php if( has_post_thumbnail() ){?>
                            <div class="blog-detail_image">
                                <?php the_post_thumbnail('braine_1170x490'); ?>
                            </div>
                            <?php } ?>
                            <div class="blog-detail_content">
                                <?php if( $options->get( 'single_post_date' ) || $options->get( 'single_post_author_box' ) || has_category() ||$options->get( 'single_post_comments' ) ){ ?>
                                <div class="blog-detail_author-outer d-flex align-items-center flex-wrap">
                                    <?php if( $options->get( 'single_post_author_box' ) ){ ?>
                                    <div class="blog-detail-author d-flex align-items-center flex-wrap">
                                        <div class="blog-detail-author-image">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                                        </div>
                                        <i><?php the_author(); ?></i>
                                    </div>
                                    <?php } ?>
                                    <ul class="blog-detail-meta d-flex align-items-center flex-wrap">
                                        <?php if( $options->get( 'single_post_date' ) ){ ?><li><span class="icon fa fa-calendar fa-fw"></span><?php echo get_the_date(); ?></li><?php } ?>
                                        <?php if( $options->get( 'single_post_comments' ) ){ ?><li><span class="icon fa fa-comment-dots fa-fw"></span><?php comments_number( wp_kses(__('0 Comments' , 'braine'), true), wp_kses(__('01 Comment' , 'braine'), true), wp_kses(__('0% Comments' , 'braine'), true)); ?></li><?php } ?>
                                    </ul>
                                </div>
                        		<?php } ?>
                        		
                                <div class="text"><?php the_content(); ?></div>
                                <div class="clearfix"></div>
                                <?php wp_link_pages(array('before'=>'<div class="paginate-links m-t30">'.esc_html__('Pages: ', 'braine'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
                        		
                                
                                <div class="post-share-options">
									<div class="post-share-inner d-flex justify-content-between flex-wrap">
										<?php if(has_tag()){ ?>
                                        <div class="post-tags"><?php the_tags( '', '', '' ); ?></div>
										<?php } ?>
									</div>
								</div>
                                
                                <?php if( $options->get( 'single_post_author_box' ) ):?>
                                <!-- Author Box -->
								<div class="blog-author_box">
									<div class="blog-author-box_inner">
										<div class="blog-author-box_content">
											<div class="blog-author-box_image">
												<?php echo get_avatar(get_the_author_meta('ID'), 118); ?>
											</div>
											<h5><?php the_author(); ?></h5>
											<div class="blog-author_box-designation"><?php esc_html_e('UI/UX Instructor', 'braine'); ?></div>
											<div class="blog-author_box-text"><?php the_author_meta( 'description', get_the_author_meta('ID') ); ?></div>
                                            <ul class="author-social_links">
												<li><a href="https://www.facebook.com/<?php echo wp_kses( get_the_author_meta( 'account_facebook', get_the_author_meta('ID') ), true ) ?>"><i class="fa-brands fa-facebook-f fa-fw"></i></a></li>
                                                <li><a href="https://www.twitter.com/<?php echo wp_kses( get_the_author_meta( 'account_x', get_the_author_meta('ID') ), true )  ?>"><i class="fa-brands fa-twitter fa-fw"></i></a></li>
                                                <li><a href="https://www.instagram.com/<?php echo wp_kses( get_the_author_meta( 'account_instagram', get_the_author_meta('ID') ), true )  ?>"><i class="fa-brands fa-instagram fa-fw"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
                                <?php endif;?>
                        		
                                <!--End post-details-->
                        		<?php comments_template(); ?>
                                
                            </div>                       	
                        </div>                        
                	</div>
					<!--End thm-unit-test-->
                </div>
                <!--End blog-content-->
				<?php endwhile; ?>
                
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
