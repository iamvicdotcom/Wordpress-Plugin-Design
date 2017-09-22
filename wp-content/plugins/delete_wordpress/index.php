<?php

/*

Plugin Name: Kill Wordpress Plugin
Plugin URI: http://rvm.cu.cc
Author: Vicdotcom
Description: First Plugin Made

*/

add_shortcode('afisare_text','kwp_afisare_text');
add_filter('the_title','kwp_change_title');
add_filter('the_content','kwp_facebook_like');
add_action('admin_notices','kwp_notification');
add_shortcode('imagini_random','kwp_random_banner');

function kwp_afisare_text(){
    
    echo 'Ana are mere!';
    
}

function kwp_change_title(){
    echo '77777';
    
}

function kwp_facebook_like($content){
    echo do_shortcode($content);
    echo '<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FOGTVY%2F&width=50&layout=button&action=like&size=large&show_faces=true&share=true&height=65&appId" width="200" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';
}

function kwp_notification(){
    
    echo '<div class="notice notice-info">';
    echo '<p>Please buy AK47</p>';
        echo'</div>';
    
}


function kwp_random_banner(){
    
    $images = array(
    
    'http://placehold.it/350x150/FF0000',
    'http://placehold.it/350x150/00ff00',
    'http://placehold.it/350x150/0000ff',
    
    );
    
    echo '<img src="'.$images[rand(0,2)].'">';
    
}