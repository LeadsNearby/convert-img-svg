<?php

/* Plugin Name: Convert IMG to SVG
Plugin URI: http://leadsnearby.com/
Description: Convert svgs linked in <img> tags to inline svgs. Images MUST have the class "svg".
Version: 1.1.0
Author: Leads Nearby
Author URI: http://leadsnearby.com/
License: GPLv2 or later
*/

// Register and insert javascript
function lnb_insert_svg_script() {
	wp_register_script('convert-img-svg', plugins_url('/convert-img-svg/script.min.js'), array('jquery'), '', 'true');
	wp_enqueue_script('convert-img-svg');
}
add_action('wp_enqueue_scripts', 'lnb_insert_svg_script');	

?>
