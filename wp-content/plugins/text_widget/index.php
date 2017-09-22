
<?php
/*
    Plugin Name: Ipsum Generator
    Plugin URI: https://swissacademy.eu
    Author: HaHaHa Programmer
    Author URI: https://swissacademy.eu
    Description: Generates a custom lore ispum text. Sooooo original. Shortcode example [ipsum paragrafe=5 lungime=short|medium|long|verylong]
*/

add_action('widgets_init', 'register_text_widget');

function register_text_widget(){
    register_widget('Text_ipsum');
}


class Text_ipsum extends WP_Widget {

    public function __construct(){
        parent::__construct(
        'text_ipsum', //id
        'Text_ipsum', //Name
        array('description' => 'This is a fun widget!')

        );

    }


    public function widget($args, $instance){
        // ce punem aici apare si pe site

    }

    public function form($instance){
        //ce apare aici afiseaza in backend la WP
echo '<h2>ManeleTV</h2>';



    }

    public function update($new_instance, $old_instance){


    }
}
