<?php
/*
Author: Improvements and fixes for WordPress
Author URI: https://github.com/ifwp
Description: Improvements and fixes for Beaver Builder Plugin, Beaver Builder Theme and Beaver Themer.
Domain Path:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network:
Plugin Name: IFWP Beaver Builder
Plugin URI: https://github.com/ifwp/ifwp-beaver-builder
Text Domain: ifwp-beaver-builder
Version: 0.2.4
*/

if(defined('ABSPATH')){
    add_action('after_setup_theme', function(){
        if(get_template() == 'bb-theme'){
            require_once(plugin_dir_path(__FILE__) . 'integrations/bb-theme/ifwp-bb-theme.php');
        }
    });
    add_action('plugins_loaded', function(){
        if(!class_exists('Puc_v4_Factory')){
			require_once(plugin_dir_path(__FILE__) . 'includes/plugin-update-checker-4.10/plugin-update-checker.php');
		}
        Puc_v4_Factory::buildUpdateChecker('https://github.com/ifwp/ifwp-beaver-builder', __FILE__, 'ifwp-beaver-builder');
        if(!function_exists('is_plugin_active')){
            require_once(ABSPATH . 'wp-admin/includes/plugin.php');
		}
        if(is_plugin_active('bb-plugin/fl-builder.php')){
            require_once(plugin_dir_path(__FILE__) . 'integrations/bb-plugin/ifwp-bb-plugin.php');
        }
        if(is_plugin_active('bb-theme-builder/bb-theme-builder.php')){
            require_once(plugin_dir_path(__FILE__) . 'integrations/bb-theme-builder/ifwp-bb-theme-builder.php');
        }
    });
}
