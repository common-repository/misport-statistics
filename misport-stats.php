<?php
/*
Plugin Name: MiSport Statistics
Plugin URI:  https://milinka.co.uk/misport/sportstats
Description: Embed MiSport Statistics into your website..
Version:     1.0
Author:      Milinka Global
Author URI:  https://milinka.co.uk
License:     GPL2
 
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2016 Milinka GLobal Ltd.
*/

    # REQUIRE
    require_once("config.php");

    if(!class_exists('WP_List_Table')){
        require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
    }

    # ACTIVATION 
    function plugin_activate() {
    }

    # DEACTIVATION 
    function plugin_deactivate() {
    }

    # PAGE VIEWS
    function misport_stats_get_menu() {
        $current_page = isset($_REQUEST['page']) ? esc_html($_REQUEST['page']) : MISPORT_STATS_PLUGIN_MENU_SLUG;
        switch ($current_page) {
            case MISPORT_STATS_PLUGIN_MENU_SLUG: include('application/index.php');
                break;
        }    
    }

    /*
    function misport_stats_admin_js(){
        wp_register_script('misport-stats-admin-js', plugin_dir_url( __FILE__ ).'js/admin.js');
        wp_enqueue_script('misport-stats-admin-js');
    }

    function misport_stats_admin_css(){
        wp_register_style('misport-stats-admin-css',  plugin_dir_url( __FILE__ ) . 'css/admin.css');
        wp_enqueue_style('misport-stats-admin-css');
    }
    */
    
    # ADD MENU
    function misport_stats_add_menu_item(){
        $menu = add_menu_page(MISPORT_STATS_PLUGIN_PAGE_TITLE, MISPORT_STATS_PLUGIN_MENU_TITLE, 'activate_plugins', MISPORT_STATS_PLUGIN_MENU_SLUG,'misport_stats_get_menu',MISPORT_STATS_PLUGIN_MENU_ICON);
        #add_action('admin_print_scripts-'.$menu,'misport_stats_admin_js');
        #add_action('admin_print_styles-'.$menu,'misport_stats_admin_css');
    }
    
    # GET STATS
    # Another way to embed statistics: 
    # Use straigh from template -> echo misport_stats_gettable("YOUR-STATISTICS-ID");
    function misport_stats_gettable($statsId){
        $stats_data_url = str_replace('#STATS-ID#',$statsId,MISPORT_STATS_PLUGIN_DATA_URL); 
        $result = wp_remote_retrieve_body(wp_remote_get($stats_data_url));
        return $result;        
    }
    
    # SHORTCODE HANDLER
    # Example how to embed statistics using shortcode: 
    # Type shortcode in content editor: [misport-statistics id="YOUR-STATISTICS-ID"] 
    function misport_stats_shortcode_func($atts) {
        $atts = shortcode_atts( array(
            'id' => ''
        ), $atts );
        $result = misport_stats_gettable($atts['id']);
        return $result;        
    }
    
    # HOOKS 
    register_activation_hook(__FILE__, 'plugin_activate');
    register_deactivation_hook(__FILE__, 'plugin_deactivate');

    # ACTIONS	
    add_action('admin_menu', 'misport_stats_add_menu_item');
    
    # SHORTCODE
    add_shortcode('misport-statistics', 'misport_stats_shortcode_func');