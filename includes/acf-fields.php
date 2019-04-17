<?php
if(function_exists('acf_add_options_page')){
  acf_add_options_page(array(
    'page_title' => esc_html__('General Settings', 'beerandbbq'),
    'menu_title' => esc_html__('General Settings', 'beerandbbq'),
    'menu_slug' => 'general-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}