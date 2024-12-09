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



<form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <div class="form-group">

        <input type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__( 'Search...', 'braine' ); ?>" required>

        <button type="submit"><i class="icon-27"></i></button>

    </div>

</form>

