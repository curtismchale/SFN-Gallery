<?php

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
