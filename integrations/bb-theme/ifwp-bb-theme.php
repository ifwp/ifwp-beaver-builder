<?php

require_once(plugin_dir_path(__FILE__) . 'class-ifwp-bb-theme.php');
add_action('customize_controls_print_footer_scripts', ['IFWP_BB_Theme', 'customize_controls_print_footer_scripts']);
add_action('customize_register', ['IFWP_BB_Theme', 'customize_register'], 20);
add_action('wp_enqueue_scripts', ['IFWP_BB_Theme', 'wp_enqueue_scripts'], 1000);
add_filter('fl_theme_compile_less_paths', ['IFWP_BB_Theme', 'fl_theme_compile_less_paths']);
add_filter('fl_theme_framework_enqueue', ['IFWP_BB_Theme', 'fl_theme_framework_enqueue'], 11);
add_filter('fl_theme_get_google_json', ['IFWP_BB_Theme', 'fl_theme_get_google_json']);
IFWP_BB_Theme::maybe_reboot_theme_mods();
