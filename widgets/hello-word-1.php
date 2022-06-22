<?php

class Elementor_Widget_1 extends \Elementor\Widget_Base {
    public function get_name() {
        return 'ela_hello_widget_1';
    }

    public function get_title() {
        return esc_html__('Hello Widget 1', 'ela-addon');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['basic'];
    }
    
    public function get_keywords() {
        return ['hello', 'world'];
    }

    protected function render() {
        ?>
            <p>Hello World </p>
        <?php
    }
    
    
    
    
}