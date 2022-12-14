<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<header>
    <div class='flex flex-row justify-between bg-slate-400 h-12 top-0 left-0 p-1'>
        <div class='flex items-center'>
            <?php if (function_exists('the_custom_logo')) {

               $custom_logo_id = get_theme_mod('custom_logo');

                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
            <img src=<?php echo $logo[0]; ?> class='h-8 w-8 rounded-full animate-pulse' alt="logo" />
            <h4 class='ml-2 font-bold animate-bounce'><?php bloginfo('name'); ?></h4>
        </div>
        <div class='flex items-center'>
            <?php
            wp_nav_menu(
                    array(
                    'menu' => "primary",
                    'container' => '',
                    'menu_class' => ' text-red-900  font-bold',
                    'theme_location' => 'primary',
                )
            );
            ?>
        </div>
    </div>
</header>

<body>