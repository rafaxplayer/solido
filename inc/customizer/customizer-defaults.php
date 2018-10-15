<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

function defaults_customizer(){

    $defaults = array();

    $defaults['colors']['primary-color']='#000';
    $defaults['colors']['header-menu-text-color']='#ffffff';
    $defaults['colors']['header-menu-text-hover-color']='#ffffff';
    $defaults['colors']['header-menu-item-hover-color']='#dd0000';
    $defaults['colors']['header-menu-active-color']='#dd0000';
    $defaults['colors']['titles-color']='#525050';
    $defaults['colors']['slider-titles-color']='#ffffff';
    $defaults['colors']['slider-paragraph-color']='#ffffff';
    $defaults['colors']['blog-dates-background-color']='#ffffff';
    $defaults['colors']['paragraphs-color']='#989894';
    $defaults['colors']['links-color']='#dd3333';
    $defaults['colors']['links-hover-color']='#dd0000';
    $defaults['colors']['footer-widgets-text-color']='#777373';
    $defaults['colors']['footer-background-color']='#171616';
    $defaults['colors']['footer-text-color']='#ffffff';
    $defaults['colors']['panel-services-color']='#21759b';
    $defaults['colors']['panel-team-background-color']='#ededed';
    $defaults['colors']['panel-team-text-color']='#525050';

    //template user page
    $defaults['colors']['user-header-color']='#525050';
    $defaults['colors']['user-name-color']='#525050';
    $defaults['colors']['user-description-color']='#525050';


    $defaults['typography']['titles_face']='Arial Black, Gadget, sans-serif';
    $defaults['typography']['titles_googlefont']='';
    $defaults['typography']['titles_fontweight']='400';
    $defaults['typography']['titles_fontsize']='2.5rem';
    $defaults['typography']['titles_fontstyle']='normal';
    $defaults['typography']['site_title_fontsize']='3.5rem';
    $defaults['typography']['site_description_fontsize']='1rem';
    $defaults['typography']['menu_header_face']='Arial Black, Gadget, sans-serif';
    $defaults['typography']['menu_header_googlefont']='';
    $defaults['typography']['menu_header_fontsize']='1rem';
    $defaults['typography']['menu_header_fontweight']='600';
    $defaults['typography']['menu_header_fontstyle']='normal';
    $defaults['typography']['texts_face']='Arial, Helvetica, sans-serif';
    $defaults['typography']['texts_googlefont']='';
    $defaults['typography']['texts_fontsize']='1.2rem';
    $defaults['typography']['texts_fontstyle']='normal';
    $defaults['typography']['texts_fontweight']='300';
    $defaults['typography']['site_title_face']='Arial Black, Gadget, sans-serif';
    $defaults['typography']['site_title_googlefont']='';
    $defaults['typography']['site_title_fontweight']='600';
    $defaults['typography']['site_description_face']='Arial, Helvetica, sans-serif';
    $defaults['typography']['site_description_googlefont']='';
    $defaults['typography']['site_description_fontweight']='400';

    //slider
    $defaults['typography']['slider_titles_fontsize']='2.5rem';
    $defaults['typography']['slider_titles_fontstyle']='normal';
    $defaults['typography']['slider_titles_fontweight']='600';
    $defaults['typography']['slider_paragraph_fontsize']='1.5rem';
    $defaults['typography']['slider_paragraph_fontstyle']='normal';
    $defaults['typography']['slider_paragraph_fontweight']='400';
   
    $defaults['sidebar_position']= 1;
    $defaults['blog-list-style']= 1;
    $defaults['show-slider']= false;
    $defaults['show-site-branding']=true;
    $defaults['header_menu_position']= 1;
    $defaults['show_panels'] = false;
    $defaults['slider-content'] = 1;
    $defaults['footer-text'] = '';
    $defaults['footer-copy'] = true;
    $defaults['panels-services-cat']="service";
    $defaults['panels-team-cat']="team";
    $defaults['panel-image-contact'] = get_template_directory_uri().'/assets/images/contact.jpg';
    $defaults['panel-link-contact']='#';
    $defaults['panel-text-team']= esc_html__('Team Us','solido');
    $defaults['panel-text-contact']= esc_html__('Want to know more about us?','solido');
    $defaults['panel-button-contact']= esc_html__('Contact us?','solido');
    $defaults['show-related_posts']=true;
    $defaults['solido_taxonomy_related_posts']='category';
    $defaults['template-user-image'] = get_template_directory_uri().'/assets/images/profile.jpg';

    return $defaults;
}
?>