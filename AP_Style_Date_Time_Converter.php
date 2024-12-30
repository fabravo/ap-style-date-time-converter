<?php
/*
Plugin Name: Frank's Super Cool AP Style Date and Time Converter
Description: Converts dates and times displayed on the site to AP Style dynamically, including Gutenberg blocks.
Version: 1.0
Author: Frank A. Bravo
Author URI: https://www.LinkedIn.com/in/fabravo/
*/

// Hook into the_content filter for Gutenberg blocks and dynamic content
add_filter('the_content', 'convert_ap_style_in_content');

// Function to process content for AP-style dates and times
function convert_ap_style_in_content($content) {
    // Use regex to target only time patterns like 2:30 am or 12:00pm
    $content = preg_replace('/\b(\d{1,2}:\d{2})\s?am\b/i', '$1 a.m.', $content);
    $content = preg_replace('/\b(\d{1,2}:\d{2})\s?pm\b/i', '$1 p.m.', $content);

    // Add a comma between the year and time if missing
    $content = preg_replace('/(\b\d{4})(\s)(\d{1,2}:\d{2}\s(?:a\.m\.|p\.m\.))/i', '$1, $3', $content);

    // Convert dates (months) to AP style
    $patterns = [
        '/\bJanuary\b/', '/\bFebruary\b/', '/\bAugust\b/',
        '/\bSeptember\b/', '/\bOctober\b/', '/\bNovember\b/', '/\bDecember\b/',
    ];
    $replacements = ['Jan.', 'Feb.', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.'];
    $content = preg_replace($patterns, $replacements, $content);

    return $content;
}

// Hook into WordPress date and time filters for post metadata
add_filter('get_the_date', 'convert_ap_style_date', 10, 2);
add_filter('get_the_time', 'convert_ap_style_time', 10, 2);
add_filter('get_post_time', 'convert_ap_style_time', 10, 3);

// Function to convert dates to AP style for metadata
function convert_ap_style_date($date, $format) {
    $patterns = [
        '/\bJanuary\b/', '/\bFebruary\b/', '/\bAugust\b/',
        '/\bSeptember\b/', '/\bOctober\b/', '/\bNovember\b/', '/\bDecember\b/',
    ];
    $replacements = ['Jan.', 'Feb.', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.'];
    $date = preg_replace($patterns, $replacements, $date);

    // Add a comma between the year and time if missing
    $date = preg_replace('/(\b\d{4})(\s)(\d{1,2}:\d{2}\s(?:a\.m\.|p\.m\.))/i', '$1, $3', $date);

    return $date;
}

// Function to convert times to AP style for metadata
function convert_ap_style_time($time, $format = '', $post = null) {
    // Target only time patterns
    $time = preg_replace('/\b(\d{1,2}:\d{2})\s?am\b/i', '$1 a.m.', $time);
    $time = preg_replace('/\b(\d{1,2}:\d{2})\s?pm\b/i', '$1 p.m.', $time);
    return $time;
}
?>
