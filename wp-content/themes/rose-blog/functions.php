<?php

// Load style.css
function blog_files() {
    wp_enqueue_style('blog_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'blog_files');