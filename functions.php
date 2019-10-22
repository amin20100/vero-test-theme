<?php

/**
 * Add theme supports and stuff
 */
add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
});

/**
 * Use the same template file for book taxonomies
 * Altough `tax-publisher.php` and `tax-book_author.php` files could be created
 */
add_filter('template_include', function($template) {
    if (is_tax('publisher') || is_tax('book_author')) {
        return locate_template('archive-book.php');
    }

    return $template;
}, 99);

/**
 * Modify user profile url endpoint base to avoide conflicts with `author` taxonomy
 * 
 */
add_action('init', function() {
    global $wp_rewrite;
    $wp_rewrite->author_base = 'profile';
});
