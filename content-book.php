<article class="book-item">
    <h2><a rel="bookmark" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

    <div class="excerpt">
        <?php the_excerpt(); ?>
    </div><!-- .excerpt -->

    <div class="details">
        <?php the_terms( get_the_id(), 'publisher', 'Publishers: ', ', ', '<br>' ); ?>
        <?php the_terms( get_the_id(), 'book_author', 'Authors: ', ', ', '<br>' ); ?>
    </div><!-- .details -->

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">See more</a>
</article>