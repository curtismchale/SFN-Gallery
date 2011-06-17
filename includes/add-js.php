<?php

     // only need on the frontend of the site (most scripts)
    function sfn_gallery_jsNotAdmin() {
        if (!is_admin()){
            wp_enqueue_script('codaslider', plugins_url( 'sfn-gallery/js/jquery.coda-slider-2.0.js' ), array('jquery'), '2.0', true);
            wp_enqueue_script('jqueryeasing', plugins_url( 'sfn-gallery/js/jquery.easing.1.3.js' ), array('jquery'), '1.3', true);
            wp_enqueue_script( 'pluginscripts', plugins_url( 'sfn-gallery/js/scripts.js' ), array('jquery'), '1.0', true );
        }// end if is_admin new scripts go above this
    }
    add_action('init', 'sfn_gallery_jsNotAdmin');

    // remove version number from jQuery
    add_filter('script_loader_src','sfn_gallery_restatement_scripts_unversion');

    function sfn_gallery_restatement_scripts_unversion($src) {
        if( strpos($src,'ajax.googleapis.com') )
            $src=remove_query_arg('ver', $src);
        return $src;
    }

    // scripts needed in admin (almost never)
    function sfn_gallery_jsInAdmin(){

    }// end jsInAdmin

    add_action('init', 'sfn_gallery_jsInAdmin');

?>
