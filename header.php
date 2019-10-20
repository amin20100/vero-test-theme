<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
<div class="site-wrap">
<header class="site-header">
    <h1><?php bloginfo('name'); ?></h1>

    <nav>
        <ul>
            <li><a href="<?php echo home_url(); ?>">home</a></li>
            <li><a href="<?php echo get_post_type_archive_link('book'); ?>">Books</a></li>
        </ul>
    </nav>
</header>