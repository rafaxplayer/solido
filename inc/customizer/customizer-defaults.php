<?php

function defaults_customizer(){

    $defaults = array();

    $defaults['colors']['primary-color']='#000';
    $defaults['colors']['header-menu-text-color']='#ffffff';
    $defaults['colors']['header-menu-text-hover-color']='#000';
    $defaults['colors']['header-menu-item-hover-color']='#dd0000';
    $defaults['colors']['header-menu-active-color']='#dd0000';
    $defaults['colors']['titles-color']='#525050';
    $defaults['colors']['paragraphs-color']='#989894';
    $defaults['colors']['links-color']='#dd3333';
    $defaults['colors']['links-hover-color']='#dd0000';
    $defaults['colors']['footer-text-color']='#ffffff';
    $defaults['typography']['titles_face']='Arial Black, Gadget, sans-serif';
    $defaults['typography']['titles_googlefont']='';
    $defaults['typography']['titles_fontweight']='400';
    $defaults['typography']['titles_fontstyle']='normal';
    $defaults['typography']['header_title_fontsize']='3.5em';
    $defaults['typography']['texts_face']='Arial Black, Gadget, sans-serif';
    $defaults['typography']['texts_googlefont']='';
    $defaults['typography']['texts_fontsize']='1em';
    $defaults['typography']['texts_fontstyle']='normal';
    $defaults['typography']['texts_fontweight']='300';
    $defaults['sidebar_position']= 1;
    $defaults['blog-list-style']= 1;
    $defaults['show-slider']= false;
    $defaults['header_menu_position']= 1;
    $defaults['slider-content'] = 1;
    $defaults['footer-text'] = '';
    $defaults['footer-copy'] = true;

    return $defaults;
}
?>