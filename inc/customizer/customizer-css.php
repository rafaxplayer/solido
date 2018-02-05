<?php
if(!function_exists('solido_custom_css')){

    function solido_custom_css(){
        ?>
        <style>
            <?php echo solido_custom_colors(); ?>
            <?php echo solido_header_menu_position(); ?>
            <?php echo solido_sidebar_position(); ?>
        </style>

    <?php

    }
}
add_action( 'wp_head', 'solido_custom_css');

if(!function_exists('solido_header_menu_position')){

    function solido_header_menu_position(){

        $outputh="
            .header-wrapp {
                display: flex;
                justify-content: space-between;
                align-items: center;}";

        $id = get_theme_mod('solido_header_menu_position');

        if($id && 2 == $id){
            $outputh ="
                .header-wrapp {
                    display: flex;
                    justify-content: space-between;
                    flex-direction: row-reverse;
                    align-items: center;}
                .site-branding {
                        padding: 1rem 1.5rem;
                        display: flex;
                        flex-direction: row-reverse;
                        align-items: center;
                    }";

            
        }
        if($id && 3 == $id){
            $outputh="
                .header-wrapp {
                    display: flex;
                    justify-content: space-between;
                    flex-direction: column;
                    align-items: center;}";
        }
        return $outputh;
    }

}
    
if(!function_exists('solido_custom_colors')){

    function solido_custom_colors(){

        $outputh =".site-header{background-color:". get_theme_mod('solido-primary-color').";}
        a{color:".get_theme_mod('solido-links-color')."}
        a:hover{color:". get_theme_mod('solido-links-hover-color').";}
        .site-title a,.site-description {color: #".get_header_textcolor().";}
        .main-navigation ul a{color:". get_theme_mod('solido-header-menu-text-color').";}
        .main-navigation ul a:hover{color:". get_theme_mod('solido-header-menu-text-hover-color').";}
        .main-navigation .current-menu-item a{color:". get_theme_mod('solido-header-menu-active-color').";}
        .main-navigation ul ul,
        .main-navigation ul a:hover{background-color:". get_theme_mod('solido-header-menu-item-hover-color').";}
        
        .site-title a,.entry-title,.entry-title a,.widget h2{ font-family:" . get_theme_mod('solido_titles_face') .";}
        .entry-content p{font-family:" . get_theme_mod('solido_texts_face') .";color:".get_theme_mod( 'solido-paragraphs-color')."}
        .entry-title,.entry-title a,.widget h2{color:". get_theme_mod('solido-titles-color').";}
        .entry-footer,.entry-footer a,.entry-meta,.entry-meta a{color:". get_theme_mod('solido-links-color').";}
        .widget h2:before{background-color:".get_theme_mod('solido-primary-color')."}
        .more a{color:".get_theme_mod('solido-primary-color')."}";
        
        return $outputh;
    }

}

if(!function_exists('solido_sidebar_position')){

    function solido_sidebar_position(){

        $outputh = ".site-content .widget-area {
            display: flex;
            justify-content: space-around;
            align-items: start;
            flex-wrap: wrap;
        }
        
        @media screen and (min-width: 768px) {
            .site-content {
               
                display: grid;
                grid-template-areas: 'content sidebar';
                grid-template-columns: 1fr minmax(240px, 25%);
                grid-column-gap: 1.5rem;
                padding: 20px;
            }
            .site-content .widget-area {
                display: block;
                grid-area: sidebar;
            }
            .site-content .content-area {
                grid-area: content;
            }
        }";

        $id = get_theme_mod('solido_sidebar_position');

        if($id && 2 == $id){
            $outputh = ".site-content .widget-area {
                display: flex;
                justify-content: space-around;
                align-items: start;
                flex-wrap: wrap;
            }
            
            @media screen and (min-width: 768px) {
                .site-content {
                   
                    display: grid;
                    grid-template-areas: 'sidebar content';
                    grid-template-columns: minmax(240px, 25%) 1fr;
                    grid-column-gap: 1.5rem;
                }
                .site-content .widget-area {
                    display: block;
                    grid-area: sidebar;
                }
                .site-content .content-area {
                    grid-area: content;
                }
            }";
        }
        if($id && 3 == $id){
            $outputh = ".site-content .widget-area {
                    display: flex;
                    justify-content: space-around;
                    align-items: start;
                    flex-wrap: wrap;
                    }";
        }
        if($id && 4 == $id){
            
            $outputh = "aside#secondary{display:none};";
        }
        return $outputh;

    }
}
        

    
    
    