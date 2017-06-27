<?php
/**
 * @package Code Converter Tool
 * @version 1.0
 */
/*
Plugin Name: Code Converter Tool
Plugin URI: 
Description: A simple code converter that checks time and change text on the website.
Author: Alvin Pacot
Version: 1.0
Author URI: https://alvin-pacot.herokuapp.com/
*/

/* 
	These application will run the following functions
	1. function that will get the number from the admin form.
	2. function that will save the numbers to the database.
	3. function that will switch the number on a specified time.
	4. function that will add a dashboard menu display the form page.
*/

add_action( 'admin_menu', 'my_plugin_menu' );
add_action( 'admin_init', 'register_my_setting' );

function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'Code Converter Tool', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	include 'views/start.php';
}

function register_my_setting() {
	register_setting( 'phone_numbers_group', 'on_work_phone'); 
	register_setting( 'phone_numbers_group', 'off_work_phone');
	//register_setting( 'phone_numbers_group', 'current_phone_display');
	register_setting( 'phone_numbers_group', 'time_starts');
	register_setting( 'phone_numbers_group', 'time_ends');
} 


function foobar_func( $atts ){
	global $wpdb;
	$now = date('H:i');
	$start_time = get_option('time_starts');
	$end_time = get_option('time_ends');
	if(strtotime($now) > strtotime($start_time) && strtotime($now) < strtotime($end_time)){
		$wpdb->update( $wpdb->prefix . 'options', ['option_value' => get_option('on_work_phone')], ['option_name' => 'current_phone_display'], $format = null, $where_format = null );
	} else {
		$wpdb->update( $wpdb->prefix . 'options', ['option_value' => get_option('off_work_phone')], ['option_name' => 'current_phone_display'], $format = null, $where_format = null );
	}
	return get_option('current_phone_display');

	
}
add_shortcode( 'phone_number', 'foobar_func' );

add_action( 'admin_footer', 'my_action_javascript' ); // Write our JS below here

function my_action_javascript() { ?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {
		jQuery('#time_starts').timepicker();
		jQuery('#time_ends').timepicker();
		jQuery('#switch').click(function () {
			if(jQuery('#current').val() == jQuery('#on_work').val()){
				jQuery('#current').val(jQuery('#off_work').val());
			} else {
				jQuery('#current').val(jQuery('#on_work').val());
			}
			console.log(jQuery('#current').val() == jQuery('#on_work').val())
		})
	});
	</script> <?php
}

define('KV_PLUGIN_URL', plugin_dir_url( __FILE__ ));

//cron job
/*
register_activation_hook(__FILE__, 'my_activation');

function my_activation()
{
	if ( ! wp_next_scheduled( 'my_task_hook' ) ) {
	  wp_schedule_event( time(), 'hourly', 'my_task_hook' );
	}
}

add_action( 'my_task_hook', 'my_task_function' );

function my_task_function() {
	//global $wpdb;
  	$now = current_time( 'mysql', $gmt = 1 );

  	$wpdb->update( $wpdb->prefix . 'options', ['option_value' => $now], ['option_name' => 'current_phone_display'], $format = null, $where_format = null );
}*/


//jquery ui

function enqueue_my_scripts_wpse_97533() {
  wp_enqueue_script('jquery-ui-datetimepicker');
  wp_enqueue_script('jquery-time-picker' ,  KV_PLUGIN_URL. 'includes/jquery-timepicker/jquery.timepicker.js',  array('jquery' ));
  wp_register_style('time_style' , KV_PLUGIN_URL. 'includes/jquery-timepicker/jquery.timepicker.css');
  wp_enqueue_style('time_style');
}
add_action('admin_enqueue_scripts','enqueue_my_scripts_wpse_97533');
 
?>
