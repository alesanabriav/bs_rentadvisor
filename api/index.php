<?php
/**
** Documentation ajax
** https://codex.wordpress.org/Plugin_API/Action_Reference/wp_ajax_(action)
**/


add_action( 'wp_ajax_nopriv_store_contact', 'store_contact' );
add_action( 'wp_ajax_store_contact', 'store_contact' );

function store_contact() {
		// $data = $_POST['data'];
		// $res = storeContact($data);
		header('Content-type: application/json');
		return json_encode(['nea' => 'ok']);
		die('nea');
}
