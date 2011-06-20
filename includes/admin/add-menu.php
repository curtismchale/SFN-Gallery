<?php

    /* adding submenu for plugin settings */
    add_action( 'admin_menu', 'sfn_gallery_create_options_page' );

    function sfn_gallery_create_options_page() {

        add_options_page( 'SFNGallery Settings', 'SFNGallery Settings', 'manage_options', 'sfn_gallery', 'sfn_gallery_settings_page' );

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

        // main settings
        add_settings_section('sfn_gallery_slide_settings', 'Slide Settings', 'sfn_gallery_section_text', 'sfn_gallery' );

            // main slide
            add_settings_field( 'sfn_gallery_main_slide_width', 'Slide Width', 'sfn_gallery_main_slide_width_input', 'sfn_gallery', 'sfn_gallery_slide_settings');
             // thumbnail
            add_settings_field( 'sfn_gallery_thumbnail_slide_width', 'Thumbnail Slide Width', 'sfn_gallery_thumbnail_width_input', 'sfn_gallery', 'sfn_gallery_slide_settings');

    }

    // Draw the section header
    function sfn_gallery_section_text() {
        echo '<p>Slide Dimensions</p>';
    }

    // Display and fill the form field
    function sfn_gallery_setting_input() {
        // get option 'text_string' value from the database
        $options = get_option( 'sfn_gallery_options' );
        $text_string = $options['text_string'];
        // echo the field
        echo "<input id='text_string' name='sfn_gallery_options[text_string]' type='text' value='$text_string' />";
    }

    // Validate user input (we want text only)
    function sfn_gallery_validate_options( $input ) {
        $valid['text_string'] = preg_replace( '/[^a-zA-Z]/', '', $input['text_string'] );

        if( $valid['text_string'] != $input['text_string'] ) {
            add_settings_error(
                'sfn_galery_text_string',
                'sfn_gallery_texterror',
                'Incorrect value entered!',
                'error'
            );
        }

        return $valid;
    }

?>
