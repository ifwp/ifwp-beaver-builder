<?php

if(!class_exists('IFWP_BB_Theme_Builder')){
    class IFWP_BB_Theme_Builder {

        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //
        // public
        //
        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

        public static function fl_theme_builder_after_render_content(){
            global $wp_query;
            $wp_query->in_the_loop = false;
        }

        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

        public static function fl_theme_builder_before_render_content(){
            global $wp_query;
            if(!$wp_query->in_the_loop){
                $wp_query->in_the_loop = true;
                if(!has_action('fl_theme_builder_after_render_content', [__CLASS__, 'fl_theme_builder_after_render_content'])){
                    add_action('fl_theme_builder_after_render_content', [__CLASS__, 'fl_theme_builder_after_render_content']);
                }
            }
        }

        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    }
}
