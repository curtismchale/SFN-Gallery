<?php

    // initializes the taxonomy function
    add_action('init', 'sfn_gallery_custom_taxonomies');

    function sfn_gallery_custom_taxonomies() {

        $labels = array(
            'name'                  => _('Slide Cagetory'),
            'singular_name'         => _('Slide Category'),
            'search_items'          => _( 'Search Slide Categories' ),
            'popular_items'         => _( 'Popular Slide Categories' ),
            'all_items'             => _( 'All Slide Categories' ),
            'parent_item'           => _( 'Parent Slide Category' ),
            'parent_item_colon'     => _( 'Parent Slide Category: '),
            'edit_item'             => _( 'Edit Slide Category' ),
            'update_item'           => _( 'Update Slide Category' ),
            'add_new_item'          => _( 'Add New Slide Category' ),
            'new_item_name'         => _( 'New Slide Category Name' ),
            'add_or_remove_items'   => _( 'Add or Remove Slide Categories' ),
            'menu_name'             => _( 'Slide Category' ),
        );

        register_taxonomy('sfn_gallery_slide_category', array( 'sfn_gallery' ), array(
                    'hierarchical'          => true, // operates like category
                    'labels'                => $labels,
                    'rewrite'               => true,
                )
        );

    }

?>
