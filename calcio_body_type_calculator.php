<?php
/*
Plugin Name: Body Type Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/body-type-calculator/
Description: Use our free Body Type Calculator to easily determine your body shape. Enter your measurements to find your unique silhouette and get expert styling tips.
Version: 1.0.0
Author: www.calculator.io / Body Type Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_body_type_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Body Type Calculator by www.calculator.io";

function calcio_body_type_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Body Type Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_body_type_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_body_type_calculator', 'calcio_body_type_calculator_shortcode' );