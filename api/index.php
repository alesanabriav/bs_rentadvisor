<?php
// https://codex.wordpress.org/Plugin_API/Action_Reference/wp_ajax_(action)
require('contact.php');

add_action( 'wp_ajax_nopriv_store_contact', 'bs_store_contact' );

function bs_store_contact() {
		$data = $_POST['data'];
		$res = storeContact($data);
		header('Content-type: application/json');
		echo json_encode(['nea' => 'ok']);
    // Don't forget to stop execution afterward.
    wp_die();
}
