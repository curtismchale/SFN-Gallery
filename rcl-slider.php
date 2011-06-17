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
    require_once( dirname(__FILE__).'/includes/add-cpt.php' );

    /* callls the new CPT */
    require_once( dirname(__FILE__).'/includes/add-meta-boxes.php' );

    /* adds JS */
    require_once( dirname(__FILE__).'/includes/add-js.php' );

    /* adds CSS */
    require_once( dirname(__FILE__).'/includes/add-css.php' );

    add_image_size( 'sfn_gallery_navigation', 30, 30, true ); // adds the nav image for the slider
    add_image_size( 'sfn_gallery_main_image', 600, 235, true ); // main slider image size

/*
 *
 * Displays the slider content wherever you put this function
 *
 */
function sfn_gallery_display(){

    global $post;?>

    <div id="sfn-gallery-wrap">

    <?php
        // defining the arguements for the custom loop
        $featuredPosts = array(
            'post_type'                 => 'sfn_gallery',
            'post_status'               => 'publish',
            'posts_per_page'            => -1, // neg 1 means all posts
            'orderby'                   => 'date',
            'order'                     => 'ASC',
        ); // end query

        // pass result into query_posts to get result
        query_posts( $featuredPosts );
        $slides = get_posts( $featuredPosts ); ?>

        <div class="coda-nav" id="coda-nav-1">

            <ul>

            <?php
                $slidePostNumber = 1;
                foreach( $slides as $post ) : ?>
                <li id="<?php the_ID(); ?>" class="tab<?php echo $slidePostNumber; ?>">
                    <a class="xtrig" href="#<?php the_ID(); ?>"><?php the_post_thumbnail( 'sfn_gallery_navigation' ); ?><span></span>
</a>
                </li>
            <?php 
                $slidePostNumber++;
                endforeach; ?>

            </ul>

        </div><!-- /.coda-nav -->

            <div class="coda-slider" id="sfn-gallery">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="panel">
                        <div class="panel-wrapper">
                            <?php the_post_thumbnail( 'sfn_gallery_main_image' ); ?>
                            <h2><?php the_title(); ?></h2>
                            <h5><?php echo get_post_meta( $post->ID, 'sfn_gallery_sub_title', true ); ?></h5>
                            <p><?php the_excerpt(); ?></p>

<div class="clear"></div>

                        </div>
                    </div>

                <?php endwhile; else: ?>

                    <h3>Oops!! Looks like something went wrong. Please get in touch with the site <a href="mailto:<?php echo get_bloginfo('admin_email'); ?>">administrator</a> and we'll get this sorted out</h3>

                <?php endif; ?>

        </div><!-- .coda-slider --> 

    </div><!-- /#rcl_slider_wrap -->

<?php } ?>
