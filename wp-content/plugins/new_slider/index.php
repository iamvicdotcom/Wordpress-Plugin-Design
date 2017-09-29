<?php
/*
    Plugin Name: slider
    Plugin URI: https://swissacademy.eu
    Author: willutz
    Author URI: https://swissacademy.eu
    Description: Slider Mo
*/

add_action('init','meniu_slider');

    function meniu_slider(){
$args = array(
'label' =>'Slider',
'public' => true,
 'capability_type' =>'post',
 'has_archive' => true,
 'supports' => array('title','thumbnail','editor'),
 'taxonomies' => array('category'),
 'menu_position' => 81,
 'menu_icon' => 'dashicons-images-alt2',

);

  register_post_type('SliderWillutz', $args);

    }

    function afisare_slider(){

global $post;

$args = array(

'post_per_page' => 5,
'post_type' => 'SliderWillutz'

);

$slides = get_posts($args);

foreach($slides as $item){

echo get_the_post_thumbnail_url($item ->ID);
echo '</br />';


echo '<br />';


}
wp_reset_postdata();
    }


add_shortcode('SliderWillutz','afisare_slider');


function Willutz_style(){
   wp_enqueue_style('SliderWillutz', plugin_dir_url( __FILE__ ) .'css/lightslider.min.css' ,false);


}

function Willutz_script(){
wp_enqueue_script('SliderWillutz-js', plugin_dir_url( __FILE__ ) .'js/lightslider.min.js' ,false);

}

add_action('wp_enqueue_scripts','Willutz_style');
add_action('wp_enqueue_scripts','Willutz_script');
