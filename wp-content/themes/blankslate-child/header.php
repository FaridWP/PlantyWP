<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
            ?>
                <a href="<?php echo home_url(); ?>"><span><?php bloginfo('name') ?></span></a>
            <?php
            }
            ?>
        </div>

        <nav class="menu">
            <ul class="menu-items">
                <?php wp_nav_menu(array('theme_location' => 'wp_planty_main_menu', 'depth' => 0)); ?>
            </ul>
        </nav>
    </header>