<?php

require_once(plugin_dir_path(__FILE__) . 'class-ifwp-bb-module-field.php');
require_once(plugin_dir_path(__FILE__) . 'class-ifwp-bb-module-section.php');
require_once(plugin_dir_path(__FILE__) . 'class-ifwp-bb-module-tab.php');
require_once(plugin_dir_path(__FILE__) . 'class-ifwp-bb-module.php');
require_once(plugin_dir_path(__FILE__) . 'class-ifwp-bb-plugin.php');
require_once(plugin_dir_path(__FILE__) . 'class-ifwp-bb-settings-form.php');
add_action('wp_head', ['IFWP_BB_Plugin', 'wp_head']);
add_filter('fl_builder_color_presets', ['IFWP_BB_Plugin', 'fl_builder_color_presets']);
add_filter('fl_inline_editing_enabled', '__return_false');
add_filter('fl_row_resize_settings', ['IFWP_BB_Plugin', 'fl_row_resize_settings']);
add_filter('walker_nav_menu_start_el', ['IFWP_BB_Plugin', 'walker_nav_menu_start_el'], 10, 4);
