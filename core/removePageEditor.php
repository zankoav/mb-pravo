<?php
function my_disable_gutenberg_for_post_type( $is_enabled, $post_type ) {
	if ( 'page' == $post_type ) {  // disable for pages, change 'page' to you CPT slug
		return false;
	}
	return $is_enabled;
}
if ( version_compare($GLOBALS['wp_version'], '5.0-beta', '>') ) {
	// WP > 5 beta
	add_filter( 'use_block_editor_for_post_type', 'my_disable_gutenberg_for_post_type', 10, 2 );
} else {
	// WP < 5 beta
	add_filter( 'gutenberg_can_edit_post_type', 'my_disable_gutenberg_for_post_type', 10, 2 );
}


add_action('admin_head', 'remove_content_editor');
function remove_content_editor()
{
//	$meta = get_post_meta(get_the_ID(), '_wp_page_template', true);
	if((int) get_option('page_on_front')==get_the_ID())	{
		remove_post_type_support('page', 'editor');
	}
//	if ($meta == "template-achievements.php" ){
//		remove_post_type_support('page', 'editor');
//	}

}