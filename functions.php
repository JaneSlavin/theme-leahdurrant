<?php

//ADD MOBILE THEME COLOURS
function sgv5_head() {
  $apple_statusbar = "black"; #OPTIONS: black / default / black-translucent
  $webkit = "#000"; #ANY HEX COLOUR

  echo '<meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="'.$apple_statusbar.'">';
  echo '<meta name="msapplication-navbutton-color" content="'.$webkit.'"><meta name="msapplication-TileColor" content="'.$webkit.'"><meta name="theme-color" content="'.$webkit.'">';
}
add_action('wp_head', 'sgv5_head');

function sgv5_child_enqueue() {
	$saved_file_version = get_option('file_version');
	if (empty($saved_file_version)) { $published_file_version = "1.0.0.0"; } else { $published_file_version = $saved_file_version; };
	
	wp_enqueue_style( 'sgv5-child-style', get_stylesheet_directory_uri().'/salonguru.css', array(), $published_file_version, 'all' );
	wp_enqueue_script( 'sgv5-child-script', get_stylesheet_directory_uri().'/salonguru.js', array('jquery'), $published_file_version, true );
}
add_action( 'wp_enqueue_scripts', 'sgv5_child_enqueue', 80 ); //priority is important, parent is 75
