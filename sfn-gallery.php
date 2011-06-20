<?php
/*
Plugin Name: SFN Gallery
Plugin URI: 
Description: Builds a slideshow based on user photos.
Version: 0.1
Author: Curtis McHale
Author URI: http://curtismchale.ca
License: GPLv2 or later
*/

/*
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
 */

    /* calls the new CPT */
    require_once( plugin_dir_path( __FILE__ ) . '/includes/add-cpt.php' );

    /* calls the new Custom Taxonomy */
    require_once( plugin_dir_path( __FILE__ ) . '/includes/add-taxonomy.php' );

    /* callls the new CPT */
    require_once( plugin_dir_path( __FILE__ ).'/includes/add-meta-boxes.php' );

    /* adds JS */
    require_once( plugin_dir_path( __FILE__ ).'/includes/add-js.php' );

    /* adds CSS */
    require_once( plugin_dir_path( __FILE__ ).'/includes/add-css.php' );

    /* adds display functions */
    require_once( plugin_dir_path( __FILE__ ).'/includes/add-display-functions.php' );

    add_image_size( 'sfn_gallery_navigation', 30, 30, true ); // adds the nav image for the slider
    add_image_size( 'sfn_gallery_main_image', 600, 235, true ); // main slider image size

    /*
     *
     * todo add ability to select taxonomy by slug in the function
     *
     * todo Admin settings
     *      - add ability to pick default slide size
     *
     * todo add widget that displays gallery based on Taxonomy
     * todo add shortcode that displays gallery based on taxonomy
     *
     * todo readme.txt
     *
     *
     *** LATER ***
     *
     * todo support localization
     *
     * todo uninstall function to remove data from the database
     *      - should prompt user before removing just in case
     *
     *  todo custom slide effects?
     *  todo option to not display the navigation thumbnails
     *  todo option to display side navigation arrows
     *
     */

    register_activation_hook( __FILE__, 'sfn_gallery_install' );

    function sfn_gallery_install(){

        /*
         * todo need to provide user message about deactivation
         * todo detect content_width and set slide to content_width on activation
         *
         */

        if( version_compare( get_bloginfo( 'version' ), '3.1', '<' ) ) {
            deactivate_plugins( basename( __FILE__ ) ); /* deactivate plugin if it's less than WP 3.1 */
        }

    }

?>
