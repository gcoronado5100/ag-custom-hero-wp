<?php

/**
 * Plugin Name: Autogrow Custom Hero Block
 * Plugin URI: http://gabecode.com
 * Description: A custom made Block for hero banner
 * Version: 1.1
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Gabriel Coronado
 * Author URI: https://gabecode.com
 * Text Domain: ag-custom-hero
 * Domain Path: /languages
 */

if (!function_exists('add_action')) {
    echo 'You are on my spot (Sheldon Cooper)';
    exit;
}


// Setup
define('AG_HERO_PATH', plugin_dir_path(__FILE__));
define('AG_HERO__DIR', plugin_dir_url(__FILE__));

// Includes
include(AG_HERO_PATH . 'includes/front/enqueue.php');
include(AG_HERO_PATH . 'includes/front/ag-hero.php');

// Hooks
add_action('wp_enqueue_scripts', 'ag_hero_enqueue');
add_shortcode('ag-custom-hero', 'ag_hero_template');
