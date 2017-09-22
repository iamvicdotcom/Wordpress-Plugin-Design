<?php

/*

Plugin Name: Kill Wordpress Plugin
Plugin URI: http://rvm.cu.cc
Author: Vicdotcom
Description: First Plugin Made

*/

add_shortcode('afisare_text','kwp_afisare_text');
add_filter('the_title','kwp_change_title');
add_action('admin_notices','kwp_notification');
add_shortcode('imagini_random','kwp_random_banner');

function kwp_afisare_text(){

    echo 'Ana are mere!';

}

function kwp_change_title(){
    echo '77777';

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
