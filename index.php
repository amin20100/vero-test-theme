<?php
/**
 * the theme comes with absolutely no css style
 */
get_header(); ?>
<div class="site-main-grids site-primary" id="primary">
    <?php get_sidebar(); ?>

    <main class="site-main-content">
        <h3>Books</h3>

        <?php
            $books = new WP_Query([
                'showposts' => get_option('posts_per_page'),
                'post_type' => 'book'
            ]);

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