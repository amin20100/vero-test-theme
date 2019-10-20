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
            while (have_posts()) {
                the_post();
                get_template_part('content-book');
            }
            wp_reset_postdata();
        ?>
    </main>
</div>

<?php get_footer();
// Ommit closing php tags it may results in unexpected output