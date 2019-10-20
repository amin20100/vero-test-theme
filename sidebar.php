<aside class="sidebar">
    <section class="widget widget-publishers">
        <h3>Publishers</h3>

        <ul>
            <?php wp_list_categories([
                'taxonomy' => 'publisher',
                'title_li' => false,
                'show_option_none' => 'No Publishers'
            ]); ?>
        </ul>
    </section>

    <section class="widget widget-authors">
        <h3>Authors</h3>

        <ul>
            <?php wp_list_categories([
                'taxonomy' => 'book_author',
                'title_li' => false,
                'show_option_none' => 'No Authors'
            ]); ?>
        </ul>
    </section>
</aside>