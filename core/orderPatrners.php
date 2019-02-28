<?php
add_action( 'pre_get_posts', 'tl_project_page' );
// Show all Projects on Projects Archive Page
function tl_project_page( $query ) {
	if (!is_admin() && is_post_type_archive( 'partner' ) ) {
		$query->set( 'posts_per_page', '-1' );
		$query->set( 'orderby', 'date archive_order' );
		$query->set( 'meta_key', 'archive_order' );
		$query->set( 'order', 'ASC' );
	}
}