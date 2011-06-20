<?php

    /* adding submenu for plugin settings */
    add_action( 'admin_menu', 'sfn_gallery_create_options_page' );

    function sfn_gallery_create_options_page() {

        add_options_page( 'SFNGallery Settings', 'SFNGallery Settings', 'manage_options', __FILE__, 'sfn_gallery_settings_page' );

    };

    /* bluilding the actual settings page */
    function sfn_gallery_settings_page() {

?>

    <div class="wrap">

    <?php screen_icon(); ?>
    <h2>SFNGallery Settings</h2>

    </div><!-- /.wrap -->

<?php

    }; //ends sfn_gallery_settings_page

?>
