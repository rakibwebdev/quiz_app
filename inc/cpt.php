<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// register custom post type
if ( !function_exists('quiz_post_type')){
    function quiz_post_type() {
        register_post_type( 'quizzes',
                array(
                    'labels' => array(
                        'name' => __( 'Quizzes' ),
                        'singular_name' => __( 'Quiz' ),
                    ),
                    'public' => true,
                    'has_archive' => true,
                    'supports' => array( 'title', 'custom-fields' ),
                    'menu_position' => 5,
                    'rewrite' => array('slug' => 'quizzes'),
                )
        ); 
    }
    add_filter( 'init', 'quiz_post_type' );
}