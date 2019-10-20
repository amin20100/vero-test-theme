<?php
/**
 * the theme comes with absolutely no css style
 */
get_header(); ?>
<div class="site-main-grids site-primary" id="primary">
    <?php get_sidebar(); ?>

    <main class="site-main-content">
        <h3>Books</h3>

        <?php while (have_posts()) : the_post(); ?>
            <article class="book-item-single">
                <h2><a rel="bookmark" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                <div class="excerpt">
                    <?php the_content(); ?>
                </div><!-- .excerpt -->

                <div class="details">
                    <?php the_terms( get_the_id(), 'publisher', 'Publishers: ', ', ', '<br>' ); ?>
                    <?php the_terms( get_the_id(), 'book_author', 'Authors: ', ', ', '<br>' ); ?>
                </div><!-- .details -->

            </article>
        <?php endwhile; wp_reset_postdata(); ?>

        <?php  //if (comments_open() || get_comments_number()) comments_template(); ?>
    </main>
</div>

<?php get_footer();
// Ommit closing php tags it may results in unexpected output