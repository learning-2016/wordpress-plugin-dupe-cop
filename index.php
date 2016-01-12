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
* Global
* Retreived the saved from the field
*/ 
$wpdupecop_options = get_option('wpdupecopsettings');
 
/**
* Origianl article
*/ 
$original =  $wpdupecop_options['original']; 

/**
* Spun articles
*/ 
$rewritten =  $wpdupecop_options['rewrite']; 
 
 
/**
* Admin page 
*/  
function wp_dupe_cop_page() {
	global $wpdupecop_options;
	global $result;
	ob_start();?> 
 
	<!-- Write an html code here.. -->

		<div class="wrap">
			<form action="options.php" method="POST"> 
				<?php settings_fields('wpdupecupgroup'); ?>

				<h1> Wordpress Dupecop Settings  </h1>

				<p> 
					<h3> Paste your Original Article Here </h3>
				</p> 
				<textarea name="wpdupecopsettings[original]" rows="20"  cols="100"  ><?php  echo $wpdupecop_options['original'];  ?></textarea>

				<p> 
					<h3> Paste your Rewritten Article Here </h3>
				</p> 
				<textarea name="wpdupecopsettings[rewrite]" rows="20"  cols="100"  ><?php  echo $wpdupecop_options['rewrite'];  ?></textarea>

				<p>
					<input type="submit" class="button-primary" value="Compare Spun Article" /> 
				</p>

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
 
/**
* Register settings
*/
function wp_dupe_cop_settings() {
	register_setting('wpdupecupgroup', 'wpdupecopsettings');
}

add_action('admin_init', 'wp_dupe_cop_settings'); 
