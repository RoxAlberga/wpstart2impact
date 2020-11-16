<?php

    function progetto_rox(){
        wp_enqueue_style('bootstrapstyle', get_template_directory_uri(). '/css/bootstrap.css', array(), '4.5.3', 'all');
        wp_enqueue_style('customstyle', get_template_directory_uri(). '/css/custom.css', array(), '1.0', 'all');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '4.5.3', true);
        wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.bundle.js', array(), '4.5.3', true);
    }

    add_action("wp_enqueue_scripts", "progetto_rox");


?>    