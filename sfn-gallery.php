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

    /* callls the new CPT */
    require_once( plugin_dir_path( __FILE__ ) . '/includes/add-cpt.php' );

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
     * todo add taxonomy to categorize slides
     * todo add ability to select taxonomy by slug in the function
     *
     * todo Admin settings
     *      - add ability to pick default slide size
     *      - custom effects?
     *
     * todo add widget that displays gallery based on Taxonomy
     * todo add shortcode that displays gallery based on taxonomy
     *
     *
     * LATER *
     * todo install function to check for CPT support
     *
     * todo uninstall function to remove data from the database
     *      - should prompt user before removing just in case
     *
     */

?>
