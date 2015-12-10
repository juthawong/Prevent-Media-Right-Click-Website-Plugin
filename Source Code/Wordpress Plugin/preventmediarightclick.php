<?php
	/*
	Plugin Name: Prevent Media Right Click Wordpress Plugin
	Plugin URI: http://www.juthawong.com
	Description: Prevent Noobs from stole your content
	Version: 1.0
	Author: Juthawong Naisanguansee
	Author URI: http://www.juthawong.com/
	License: GPLv2
	*/
	

function defapreventrightclickmedia(){
				wp_enqueue_script('jquery');
				echo '<script src="'.plugins_url( 'preventrightclick.js', __FILE__ ).'"></script>';

}
	add_action('wp_head','defapreventrightclickmedia',9);