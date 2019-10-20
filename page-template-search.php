<?php
/**
 * Template Name: IBSN Search
 * 
 * the theme comes with absolutely no css style
 */

$args = [
    'post_type' => 'book',
    'showposts' => get_option('posts_per_page'),
];

/**
 * This will search isbn in books_info table then finds the post ids matching entered isbn and then put the array of post_ids as
 * `post__in` parameter
 */
if (! empty($_GET['isbn'])) {
    $isbn = stripslashes(strip_tags(htmlentities(trim($_GET['isbn']))));
    global $wpdb;
    $book_ids = $wpdb->get_row($wpdb->prepare("
        SELECT post_id FROM {$wpdb->prefix}books_info WHERE isbn = %s
    ", $isbn), ARRAY_A) ?: [];

    $book_ids = array_map('absint', array_values($book_ids));

    $args['post__in'] = $book_ids ?: [0];
}

$books = new WP_Query($args);
get_header(); ?>
<div class="site-main-grids site-primary" id="primary">
    <?php get_sidebar(); ?>

    <main class="site-main-content">
        <h3>Books</h3>

        <form method="get">
            <input placeholder="Enter ISBN..." type="text" name="isbn" value="<?php echo ! empty($_GET['isbn']) ? esc_attr($_GET['isbn']) : ''; ?>">
            <button type="submit">search</button>
        </form>

        <?php
            while ($books->have_posts()) {
                $books->the_post();
                get_template_part('content-book');
            }
            wp_reset_postdata();
        ?>

        <p>&nbsp;</p>
        <a href="<?php echo get_post_type_archive_link('book'); ?>">See all books</a>
    </main>
</div>

<?php get_footer();
// Ommit closing php tags it may results in unexpected output