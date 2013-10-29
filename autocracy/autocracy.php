<?php
add_action('admin_init', 'theme_options_init');
add_action('admin_menu', 'theme_options_add_page');
/**
 * Init plugin options to white list our options
 */
function theme_options_init() {
	register_setting('sample_options', 'sample_theme_options', 'theme_options_validate');
	register_setting('main_options', 'main_theme_options', 'main_theme_options_validate');
	register_setting('sidebar_options', 'sidebar_theme_options', 'sidebar_theme_options_validate');
	register_setting('grid_options', 'grid_theme_options', 'grid_theme_options_validate');
register_setting('process_options', 'process_theme_options', 'process_theme_options_validate');
}
/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_menu_page(__('Bonfun Manager', 'sampletheme'), __('Bonfun Options', 'sampletheme'), 'edit_theme_options', 'main_theme_options', 'main_theme_options_do_page', get_template_directory_uri().'/images/favicon.png');
	add_submenu_page('main_theme_options',__('Homepage Manager', 'sampletheme'), __('Homepage Manager', 'sampletheme'), 'edit_theme_options', 'sample_theme_options', 'theme_options_do_page');
	add_submenu_page('main_theme_options',__('Sidebar Manager', 'sampletheme'), __('Sidebar Manager', 'sampletheme'), 'edit_theme_options', 'sidebar_theme_options', 'sidebar_theme_options_do_page');
	add_submenu_page('main_theme_options',__('Grid Manager', 'sampletheme'), __('Grid Manager', 'sampletheme'), 'edit_theme_options', 'grid_theme_options', 'grid_theme_options_do_page');
add_submenu_page('main_theme_options',__('Process Manager', 'sampletheme'), __('Process Manager', 'sampletheme'), 'edit_theme_options', 'process_theme_options', 'process_theme_options_do_page');
}
?>