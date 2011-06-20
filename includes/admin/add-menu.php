<?php

    /* adding submenu for plugin settings */
    add_action( 'admin_menu', 'sfn_gallery_create_options_page' );

    function sfn_gallery_create_options_page() {

        add_options_page( 'SFNGallery Settings', 'SFNGallery Settings', 'manage_options', __FILE__, 'sfn_gallery_settings_page' );

    };

    function sfn_gallery_settings_page() {

    };

?>
