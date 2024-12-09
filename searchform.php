<?php
/**
 * Search Form template
 *
 * @package BRAINE
 * @author Themeim
 * @version 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
?>
<!-- Search Widget -->
<div class="search-box">
    <div class="widget-content">
        <form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="form-group">
                <input type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__( 'Search...', 'braine' ); ?>" required>
                <button type="submit"><span class="icon fa fa-search"></span></button>
            </div>
        </form>
    </div>
</div>