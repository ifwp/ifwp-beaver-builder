<?php

if(!class_exists('IFWP_BB_Plugin')){
    class IFWP_BB_Plugin {

        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //
        // public
        //
        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

        public static function fl_builder_color_presets($colors){
        	return array_values(array_unique(array_merge(array_map(function($color){
        		return '#' . ltrim($color, '#');
        	}, $colors), ['#007bff', '#6c757d', '#28a745', '#17a2b8', '#ffc107', '#dc3545', '#f8f9fa', '#343a40'])));
        }

        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

        public static function fl_row_resize_settings($settings){
            $settings['userCanResizeRows'] = false;
            return $settings;
        }

        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

        public static function walker_nav_menu_start_el($item_output, $item, $depth, $args){
            if($item->object == 'fl-builder-template'){
                $item_output = $args->before;
                $item_output .= do_shortcode('[fl_builder_insert_layout id="' . $item->object_id . '"]');
                $item_output .= $args->after;
            }
            return $item_output;
        }

        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

        public static function wp_head(){
            if(array_key_exists('fl_builder', $_GET)){ ?>
                <style>
                    .fl-block-col-resize {
                        display: none;
                    }
                </style><?php
            }
        }

        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    }
}
