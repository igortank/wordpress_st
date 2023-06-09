<?php
/**
 * Module Name: Dominant Color Images
 * Description: Adds support to store the dominant color of newly uploaded images and create a placeholder background of that color.
 * Experimental: No
 *
 * @package performance-lab
 * @since 1.2.0
 */

// Do not load the code if it is already loaded through another means.
if ( function_exists( 'dominant_color_metadata' ) ) {
	return;
}

require_once __DIR__ . '/helper.php';
require_once __DIR__ . '/hooks.php';
