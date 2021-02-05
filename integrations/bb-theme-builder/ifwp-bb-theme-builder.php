<?php

require_once(plugin_dir_path(__FILE__) . 'class-ifwp-bb-theme-builder.php');
add_action('fl_theme_builder_before_render_content', ['IFWP_BB_Theme_Builder', 'fl_theme_builder_before_render_content']);
