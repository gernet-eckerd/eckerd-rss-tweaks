<?php 
/*
Plugin Name: Eckerd College RSS Tweaks
Plugin URI: https://www.eckerd.edu
Description: RSS tweaks for the Eckerd College website, including <enclosure> tags for images, etc.
Version: 0.1.0
Author: Eckerd College
Author URI: https://www.eckerd.edu
*/

function eckerd_addimageenclosure() {
	global $post;
	if (has_post_thumbnail($post->ID)) {
		$attachmentID = get_post_thumbnail_id($post->ID);
		$url = wp_get_attachment_url($attachmentID);
		$file = get_post($attachmentID);
		$mimeType = $file->post_mime_type;
		echo "<enclosure url=\"$url\" type=\"$mimeType\" />";
	}
}
add_action('rss2_item', 'eckerd_addimageenclosure');
