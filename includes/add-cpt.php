<?php 
/* adds the custom post type for the slider */

add_action('init', 'sfn_gallery_custom_post_types');

    function sfn_gallery_custom_post_types(){

        register_post_type('sfn_gallery', // http://codex.wordpress.org/Function_Reference/register_post_type
            array(
                'labels'                => array(
                    'name'                  => __('Slider'),
                    'singular_name'         => __('Slider'),
                    'add_new'               => __('Add New Slide'),
                    'add_new_item'          => __('Add New Slide'),
                    'edit'                  => __('Edit'),
                    'edit_item'             => __('Edit Slide'),
                    'new_item'              => __('New Slide'),
                    'view'                  => __('View Slide'),
                    'view_item'             => __('View Slide'),
                    'search_items'          => __('Search Slides'),
                    'not_found'             => __('No Slides Found'),
                    'not_found_in_trash'    => __('No Slides found in Trash')
                    // only useful if like pages 'parent'                => __()
                    ), // end array for labels
                'description'           => __('Slides'),
                'public'                => true,
                'menu_position'         => 5, // sets admin menu position
                'menu_icon'             => plugins_url( 'sfn-gallery/images/slide-icon.png' ),
                'hierarchical'          => false, // funcions like posts
                'supports'              => array('title', 'excerpt', 'thumbnail'),
                'rewrite'               => array('slug' => 'gallery', 'with_front' => true,), // permalinks format
                'can_export'            => true,
            ) // end array for register_post_type
        ); // end register_post_type

    } // end granda_show_post
?>
