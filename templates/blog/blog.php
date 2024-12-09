<?php

/**
 * Blog Content Template
 *
 * @package    WordPress
 * @subpackage BRAINE
 * @author     Template Path
 * @version    1.0
 */

$options = braine_WSH()->option();
$allowed_tags = wp_kses_allowed_html('post');

?>

<div <?php post_class(); ?>>
	
    <!-- News Block Three -->
    <div class="news-block_three">
        <div class="news-block_three-inner">
            <?php if( has_post_thumbnail() ){?>
            <div class="news-block_three-image">
                <a href="<?php echo esc_url( get_the_permalink( get_the_id() ) );?>"><?php the_post_thumbnail('braine_1170x490'); ?></a>
            </div>
            <?php } ?>
            <div class="news-block_three-content">
                <?php if($options->get('blog_post_author') || $options->get( 'blog_post_comments' )){ ?>
                <ul class="news-block_three-meta">
                    <?php if( $options->get('blog_post_author')){ ?><li><i class="fas fa-user fa-fw"></i><?php the_author(); ?></li><?php } ?>
                    <?php if( $options->get( 'blog_post_comments' ) ){ ?><li><i class="fas fa-comment fa-fw"></i><?php comments_number( wp_kses(__('0 Comments' , 'braine'), true), wp_kses(__('01 Comment' , 'braine'), true), wp_kses(__('0% Comments' , 'braine'), true)); ?></li><?php } ?>
                </ul>
                <?php } ?>
                <h3 class="news-block_three-title"><a href="<?php echo esc_url( get_the_permalink( get_the_id() ) );?>"><?php the_title(); ?></a></h3>
                <div  class="news-block_three-text"><?php the_excerpt(); ?></div>
                <div class="news-block_three-button">
                    <a href="<?php echo esc_url( get_the_permalink( get_the_id() ) );?>" class="template-btn btn-style-one">
                        <span class="btn-wrap">
                            <span class="text-one"><?php esc_html_e('Read more', 'braine'); ?></span>
                            <span class="text-two"><?php esc_html_e('Read more', 'braine'); ?></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>    
        
</div>