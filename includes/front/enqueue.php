<?php

function ag_hero_enqueue()
{
    wp_enqueue_style('ag-hero-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', [], '6.2.1', 'all');

    wp_register_style('ag-hero-style', AG_HERO__DIR . 'assets/custom-hero.css', [], null, 'all');
    wp_enqueue_style('ag-hero-style');


    wp_enqueue_script('scroll-js', AG_HERO__DIR . 'assets/scroll-header.js', [], null, true);

    wp_register_script('ag-hero-script', AG_HERO__DIR . 'assets/custom-hero.js', [], null, true);
    wp_enqueue_script('ag-hero-script');
}
