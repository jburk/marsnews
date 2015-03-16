<?php // Opening PHP tag - nothing should be before this, not even whitespace

set_post_thumbnail_size( 50, 50 );

// Custom Function to Include
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

function remove_ot_menu () {
    remove_submenu_page( 'themes.php', 'devdm-theme-options' );
}
add_action( 'admin_init', 'remove_ot_menu' );

add_action( 'admin_bar_menu', 'remove_devdm', 999 );
function remove_devdm( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'devdm_theme_options' );
}

// example custom dashboard widget
function custom_dashboard_widget() {
	echo "<p><a href=\"https://news.google.com/news/section?pz=1&cf=all&q=Mars\">Google News: Mars</a></p>";
	echo "<p><a href=\"http://www.martiansoil.com/\">Martian Soil</a></p>";
	echo "<p><a href=\"http://www.marsdaily.com/\">MarsDaily</a></p>";
	echo "<p><a href=\"http://www.sciencedaily.com/news/space_time/mars/\">Science Daily: Mars</a></p>";
	echo "<p><a href=\"http://mysql.redplanetlabs.net/\">PhpMyAdmin</a></p>";
}
function add_custom_dashboard_widget() {
	wp_add_dashboard_widget('custom_dashboard_widget', 'MarsNews.com Editors Dashboard', 'custom_dashboard_widget');
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');