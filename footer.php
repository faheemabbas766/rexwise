<?php
/**
 * Footer Main File.
 *
 * @package BRAINE
 * @author  Themeim
 * @version 1.0
 */
global $wp_query;
$options = braine_WSH()->option();
$page_id = ( $wp_query->is_posts_page ) ? $wp_query->queried_object->ID : get_the_ID();
?>

	<div class="clearfix"></div>

	<?php braine_template_load( 'templates/footer/footer.php', compact( 'page_id' ) );?>    
    
</div>

<?php if( $options->get( 'show_scroltop' ) ):?>
<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
