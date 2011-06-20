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

        <form action="options.php" method="post">

<?php

            settings_fields( 'sfn_gallery_options' );
            do_settings_sections( 'sfn_gallery' );

?>

            <input name="Submit" type="submit" value="Save Changes" />

        </form>

    </div><!-- /.wrap -->

<?php

    }; //ends sfn_gallery_settings_page

    // Register and define the settings
    add_action('admin_init', 'sfn_gallery_admin_init');
    function sfn_gallery_admin_init(){
        register_setting( 'sfn_gallery_options', 'sfn_gallery_options', 'sfn_gallery_validate_options' );

        add_settings_section( 'sfn_gallery_main', 'SFNGallery Settings', 'sfn_gallery_section_text', 'sfn_gallery' );

        add_settings_field( 'sfn_gallery_slide_width', 'Slide Width', 'sfn_gallery_slide_width', 'sfn_gallery_options', 'sfn_gallery_main' );
    }

?>
