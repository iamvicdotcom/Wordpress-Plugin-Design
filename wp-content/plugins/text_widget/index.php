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

        extract($args);
        $text = $instance['text'];

        echo $before_widget;

echo '<p>'. $text . '</p>';


        echo $after_widget;

    }

    public function form($instance){
        //ce apare aici afiseaza in backend la WP
if(isset($instance['text'])){

  $text = $instance['text'];
}
else {
  $text ='';
}

echo '<h2>Scrie un text</h2>';

echo '<label>Scrie text aici:</label>';
echo '<input name="'.$this->get_field_name('text').'" id="'.$this->get_field_name('text').'"
type="text" class="widefat" value="'.$text.'">';
echo '<br .>';
echo '<br .>';


    }

    public function update($new_instance, $old_instance){

      $instance = array();

      $instance['text'] = (!empty($new_instance ['text'])) ? strip_tags($new_instance['text']) : '';

      return $instance;


    }
}
