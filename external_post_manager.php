<?php
/*
 * Plugin Name: External Post Manager
 * Plugin URI: https://skydex.tech/
 * Description: Post Manager Plugin for WordPress Blog Post.
 * Author: SM Mollah
 * Author URI: https://smmollah.wordpress.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version: 1.0.0
 * Requires at least: 6.3
 * Requires PHP: 7.4
 * Text Domain: smcp
 */

  function smcp_register_post_type() {
    $args = [
        'label' => esc_html__( 'Custom posts', 'smcp'),
        'labels' => [
            'menu_name'  => esc_html__('Custom posts', 'smcp'),
            'name_admin_bar' => esc_html__('Custom post', 'smcp'),
            'add_new' => esc_html__('Add custom post', 'smcp'),
            'add_new_item' => esc_html__('Add new custom post', 'smcp'),
            'new_item'  => esc_html__('Add new custom post', 'smcp'),
            'edit_item' =>  esc_html__('Edit custom post', 'smcp'),
            'view_item' =>  esc_html__('View custom post', 'smcp'),
            'update_item'  => esc_html__('View custom post', 'smcp'),
            'all_items'  => esc_html__('All custom posts', 'smcp'),
            'search_items'  => esc_html__('Search custom posts', 'smcp'),
            'parent_item_colon'  => esc_html__('Parent custom post', 'smcp'),
            'not_found' =>  esc_html__('No custom posts found', 'smcp'),
            'not_found_in_trash' => esc_html__('No custom posts found in trash', 'smcp'),
            'name' =>  esc_html__('Custom posts', 'smcp'),
            'singular_name' => esc_html__('Custom post', 'smcp'),
        ],
            'public' => true,
            'exclude_from_search' => false,
            'publicaly_queryable' => true,
            'show_ui' => true,
            'show_in_nav_menus'  => true,
            'show_in-admin_bar'  => true,
            'show_in_rest'  => true,
            'capability_type' => 'post',
            'herirarchical'  => false,
            'has_archive'    => true,
            'query_var'   => true,
            'can_export'  => true,
            'rewrite_no_font' => false,
            'show_in_menu'  => false,
            'support'  =>[
                'title',
                'editor',
                'thumbnail',
            ],
            'rewrite' => true
                       
        ];

        add_action( 'init' 'smcp_register_post_type');
        register_post_type('custom-post', $args );

}