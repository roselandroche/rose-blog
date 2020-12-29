<!DOCTYPE html>

<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" >
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <header>
            <div>
                <!-- logo could be added here -->
                <h1><a href="<?php echo esc_url(site_url()); ?>">Rose's Blog</a></h1>
                <!-- search a tag and icon could be added here -->
            </div>
        </header>