<?php

    if( !is_admin() ){

        add_action( 'wp_print_styles', 'sfn_gallery_styles' );

        function sfn_gallery_styles(){

            $sfnGallerySiteUrl = WP_PLUGIN_URL . '/sfn-gallery/css/sfn-gallery-styles.css';
            $sfnGalleryPluginStyle = WP_PLUGIN_DIR . '/sfn-gallery/css/sfn-gallery-styles.css';

            if( file_exists( $sfnGalleryPluginStyle ) ) {

                wp_register_style( 'sfnGalleryStylesheets', $sfnGallerySiteUrl );
                wp_enqueue_style( 'sfnGalleryStylesheets' );

            } // ends check for exsistence of file

        } // ends styles function

    } // limits styles to not loding in the admin area

?>
