<?php
/*
    Plugin Name: Ipsum Generator   
    Plugin URI: https://swissacademy.eu
    Author: HaHaHa Programmer
    Author URI: https://swissacademy.eu
    Description: Generates a custom lore ispum text. Sooooo original. Shortcode example [ipsum paragrafe=5 lungime=short|medium|long|verylong]
*/
add_shortcode('ipsum','generate_ipsum');
function generate_ipsum( $atts ) {
    
    if(empty($atts['tip'])) {
        $tip = 'text';
    } else {
        $tip = $atts['tip']; 
    }
    
    
    switch($tip) {
        case 'text':
            
                if(empty($atts['paragrafe'])) {
                    $paragrafe = 2;
                } else {
                    $paragrafe = $atts['paragrafe']; 
                }
                if(empty($atts['lungime'])) {
                    $lungime = 'medium';
                } else {
                    $lungime = $atts['lungime']; 
                }
            
                $ipsum = file_get_contents('https://loripsum.net/api/'.$paragrafe.'/'.$lungime);
                echo $ipsum;
            
            break;
        case 'img':
            
                if(empty($atts['lungime'])) {
                    $lungime = 350;
                } else {
                    $lungime = $atts['lungime']; 
                }
                if(empty($atts['latime'])) {
                    $latime = 50;
                } else {
                    $latime = $atts['latime']; 
                }
                echo '<br /><img src="http://placehold.it/'.$lungime.'x'.$latime.'">';
            
            break;
            
    }
    
    
    
    
    
    
    
}