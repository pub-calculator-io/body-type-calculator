<?php
/*
Plugin Name: CI Body type calculator
Plugin URI: https://www.calculator.io/body-type-calculator/
Description: Discover your body shape with our easy and accurate body type calculator. Learn how to flatter your unique proportions with our helpful guide.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_body_type_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Body Type Calculator by Calculator.iO";

function display_ci_body_type_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Body Type Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_body_type_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_body_type_calculator', 'display_ci_body_type_calculator' );