<?php
/*
 * Plugin Name: HG Plugin
 * Plugin URI: http://huntandgather.com
 * Description: This plugin handles important data structuring functions for Gravity Studies, <strong>do not</strong> deactivate this plugin.
 * Version: 1.0
 * Author: Hunt and Gather
 * Author URI: http://huntandgather.com

 * @client Hunt & Gather
 * @copyright 2012
 * @version 1.0
 * @author Hunt and Gather
 * @link http://huntandgather.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @package AGC
 */

/* Set up the plugin. */
add_action( 'plugins_loaded', 'hg_plugin_setup' );


/**
 * AGC plugin setup function.
 *
 * @since 0.1.0
 */
function hg_plugin_setup() {

	/* Get the plugin directory URI. */
	define( 'GATHER_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

	/* Set up the post types */
	


	add_action('wp_enqueue_scripts', 'ajaxcontact_enqueuescripts');

	// creating Ajax call for WordPress
	add_action( 'wp_ajax_nopriv_ajaxcontact_send_mail', 'ajaxcontact_send_mail' );
	add_action( 'wp_ajax_ajaxcontact_send_mail', 'ajaxcontact_send_mail' );

}

/**
 * Register taxonomies and custom post types.
 *
 * @since 0.1.0
 */




function ajaxcontact_enqueuescripts(){

	wp_enqueue_script( 'ajaxcontact', GATHER_URI . '/js/script.js' );

	wp_localize_script( 'ajaxcontact', 'contact_submit', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

}

function ajaxcontact_send_mail() {

	$result = '';

	$subject = 'Inquiry on a page';

	$page_link = $_POST['permalink'];

	$page_title = $_POST['page-title'];

	$page_anchor = '<a href="' . $page_link . '">' . $page_title . '</a>';



	// This goes into the email
	$message = 'Name: ' . $_POST['name'] . '<br>';
	$message .= 'Last Name ' . $_POST['lastname'] . '<br>';
	$message .=	'Email: ' . $_POST['email'] . '<br>';
	$message .=	'Company: ' . $_POST['company'] . '<br>';
	$message .=	'Phone: ' . $_POST['phone'] . '<br>';
	$message .=	'Message: ' . $_POST['message'] . '<br>';
	$message .= $page_anchor . '<br>';

	// This is the to field 
	$to = 'phippsian@gmail.com';

	// This is the from field (person who sent the contact form), we could add a CC here too
	$headers = 'From:' . $_POST['email'] . "\r\n";

	//$headers[] = 'From: Me Myself <me@example.net>';
	//$headers[] = 'Cc: John Q Codex <jqc@wordpress.org>';
	//$headers[] = 'Cc: iluvwp@wordpress.org'; // note you can just use a simple email address


	// Call the wp_mail function, display message based on the result.
	if ( wp_mail( $to, $subject, $message, $headers ) ) {

	    $result = 'Thanks for submitting your information, ' . $_POST['name'] . '. Someone will get back to you shortly.';

	} else {

	    $result = 'Oh no, something went wrong';

	};

	// Return the String
	die( $result );


}