<?php
/**
 * @package Erwin
 * @version 1.0
 */
/*
Plugin Name: Wordpress Dupe Cop
Plugin URI: http://fashionsponge.com
Description: This is the second plugin - I will be developing man!
Author: Jesus Erwin Suarez
Version: 1.0
Author URI: http://erwin.com  
src:  https://www.youtube.com/watch?v=_nW-h52I7Tg
*/ 


/**
* Origianl article
*/
 
/**
* Spun articles
*/ 
 
/**
* Admin page 
*/  
function wp_dupe_cop_page() {
	ob_start();?> 
 
	<!-- Write an html code here.. -->

		<div class="wrap">
			<form action="options.php" method="POST">
				<h1> Wordpress Dupecop Settings  </h1>
			</form> 
		</div>

	<?php   
	echo ob_get_clean(); 
}
 
/**
* Admin tab
*/    
function wp_dupe_cop_tab() {
	add_options_page('wp dupeco', 'WP Dupecop', 'manage_options', 'wpdupecup', 'wp_dupe_cop_page');
}  
add_action('admin_menu', 'wp_dupe_cop_tab');
