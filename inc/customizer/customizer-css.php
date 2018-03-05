<?php
if(!function_exists('solido_custom_css')){

    function solido_custom_css(){
    ?>
        <style id="solido_custom_css">
            <?php echo solido_blog_style(); ?>
            <?php echo solido_custom_colors_fonts(); ?>
            <?php echo solido_header_menu_position(); ?>
            <?php echo solido_sidebar_position(); ?>
        </style>
    <?php
    }
}
add_action( 'wp_head', 'solido_custom_css');

// for menu header position
if(!function_exists('solido_header_menu_position')){

    function solido_header_menu_position(){
        $outputh_header="
            .header-wrapp {
                display: flex;
                justify-content: space-between;
                flex-direction: column;
            }
            @media screen and (min-width: 37.5em){
                .header-wrapp {
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                    align-items: center;}
                .main-navigation{
                    margin-right: 10px;
                }
            }";

        $solido_options = get_theme_mod('solido_options');
        if(!isset($solido_options['header_menu_position'])){
            return;
        }
        $id = $solido_options['header_menu_position'];

        if($id && 2 == $id){
            $outputh_header ="
            @media screen and (min-width: 37.5em){
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
                }
                .main-navigation{
                    margin-left: 10px;
                }
            }";
        }
        if($id && 3 == $id){
            $outputh_header="
            @media screen and (min-width: 37.5em){
                .header-wrapp {
                    display: flex;
                    justify-content: space-between;
                    flex-direction: column;
                    align-items: center;}
                .site-branding {
                    text-align:center;
                }
            }";
        }

        if($id && 4 == $id){
            $outputh_header="
            @media screen and (min-width: 37.5em){
                .header-wrapp {
                    display: flex;
                    justify-content: space-between;
                    flex-direction: column-reverse;
                    align-items: center;}
                .site-branding {
                    text-align:center;
                }
            }";
        }
        return $outputh_header;
    }

}

//css for colors 
if(!function_exists('solido_custom_colors_fonts')){

    function solido_custom_colors_fonts(){

        $font_face = solido_get_font_face();
        $primary_color = solido_get_theme_mod('colors','primary-color');

        $outputh_css = "
            .site-titles{display:". show_site_branding() ."}
            .site-header{background-color:". $primary_color .";}
            .solido-front-page .service-wrap .service-content{background-color:". solido_get_theme_mod('colors','panel-services-color').";}
            a{color:" . solido_get_theme_mod('colors','links-color') . "}
            .site-branding .site-title{font-size:". solido_get_theme_mod('typography','site_title_fontsize').";}
            .site-branding .site-title a{font-family:".$font_face['site_title']."}
            .site-branding .site-description{font-size:".solido_get_theme_mod('typography','site_description_fontsize').";font-family:" . $font_face['site_description'] .";}
            a:hover{color:". solido_get_theme_mod('colors','links-hover-color').";}
            .site-title a,.site-description {color: #".get_header_textcolor().";}
            .post .post-date{background-color:". solido_get_theme_mod('colors','blog-dates-background-color') .";}
            .entry-title,.entry-title a,.widget h2{ font-family:". $font_face['titles'] .";font-style:". solido_get_theme_mod('typography','titles_fontstyle') .";font-weight:". solido_get_theme_mod('typography','titles_fontweight').";}
            .entry-content p{font-family:" . $font_face['texts'] .";color:".solido_get_theme_mod('colors','paragraphs-color').";font-size:". solido_get_theme_mod('typography','texts_fontsize').";font-style:".solido_get_theme_mod('typography','texts_fontstyle').";font-weight:". solido_get_theme_mod('typography','texts_fontweight')."}
            .entry-title,.entry-title a,.widget h2,#comments h2{color:". solido_get_theme_mod('colors','titles-color').";}
            .entry-footer,.entry-footer a,.entry-meta,.entry-meta a{color:". solido_get_theme_mod('colors','links-color').";}
            .entry-footer a:hover,.entry-meta a:hover,.widget a:hover,.slider-item .more a:hover{color:".solido_get_theme_mod('colors','links-hover-color').";}
            .widget h2:after,#comments h2:before,.solido-front-page #solido-team h2:after{background-color:".$primary_color."}
            .widget a{color:#282828}
            .main-navigation ul a{color:". solido_get_theme_mod('colors','header-menu-text-color').";font-family:".$font_face['menu_header'].";font-style:". solido_get_theme_mod('typography','menu_header_fontstyle') .";font-weight:". solido_get_theme_mod('typography','menu_header_fontweight').";font-size:". solido_get_theme_mod('typography','menu_header_fontsize').";}
            .main-navigation ul a:hover{color:". solido_get_theme_mod('colors','header-menu-text-hover-color').";}
            @media screen and (min-width:37.5em){
                .main-navigation>div>ul{background-color:transparent;}
                .main-navigation .current-menu-item a{color:". solido_get_theme_mod('colors','header-menu-active-color').";}
                .main-navigation ul ul,
                .main-navigation>div>ul>li:hover{background-color:". solido_get_theme_mod('colors','header-menu-item-hover-color').";}
                .main-navigation ul ul li:hover{background-color:". solido_darken_color(solido_get_theme_mod('colors','header-menu-item-hover-color')).";}
            }
            .button-up,.menu-toggle{background-color:". $primary_color."}
            .button-up:hover{background-color:".solido_darken_color($primary_color).";}
            .comment-form .submit{border: 3px solid ".$primary_color.";color:".$primary_color."}
            .comment-form .submit:hover{border: 3px solid ".solido_darken_color($primary_color).";color:".solido_darken_color($primary_color).";}
            .footer-widgets .widget,.footer-widgets .widget a,.footer-widgets .widget h2{color:". solido_get_theme_mod('colors','footer-widgets-text-color').";}
            .site-footer{background-color:". solido_get_theme_mod('colors','footer-background-color').";}
            .site-info{color:". solido_get_theme_mod('colors','footer-text-color').";}";
        
        return $outputh_css;
    }

}

// css for list of blog
if(!function_exists('solido_blog_style')){

    function solido_blog_style(){

        $outputh_blog_style ="

            .blog-content {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(16rem, 1fr));
                grid-gap: 1.8rem 1.5rem;
            }";

        $solido_options = get_theme_mod('solido_options');
        if(!isset($solido_options['blog-list-style'])){
            return;
        }
        $id = $solido_options['blog-list-style'];

        if($id && 2 == $id){
            $outputh_blog_style ="
                .blog-content {
                    display: grid;
                    grid-template-columns: 1fr;
                    grid-row-gap: 2rem;
                    max-width:70rem;
                    margin: 0 auto;
                }";

        }

        return $outputh_blog_style;

    }
}

//css for sidebar position
if(!function_exists('solido_sidebar_position')){

    function solido_sidebar_position(){

        if( is_front_page() && ! is_home() ){
            return;
        } 

        $outputh_position = ".site-content #secondary {
            display: flex;
            justify-content: flex-start;
            align-items: start;
            flex-wrap: wrap;
        }
        @media screen and (min-width: 768px) {
            .site-content {
                display: grid;
                grid-template-areas: 'content sidebar';
                grid-template-columns: 1fr minmax(240px, 25%);
                grid-column-gap: 1.5rem;
                
            }
            .site-content #secondary {
                display: block;
                grid-area: sidebar;
            }
            .site-content .content-area {
                grid-area: content;
            }
        }";
        
        $solido_options = get_theme_mod('solido_options');

        if(!isset($solido_options['sidebar_position'])){
            return;
        }
        $id = $solido_options['sidebar_position'];
        
        if($id && 2 == $id){

            $outputh_position = ".site-content #secondary {
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
                .site-content #secondary {
                    display: block;
                    grid-area: sidebar;
                }
                .site-content .content-area {
                    grid-area: content;
                }
            }";
        }
        if($id && 3 == $id){

            $outputh_position = "
                    .site-content #secondary {
                        display: flex;
                        flex-direction:column;
                        margin-top: 4rem;
                        padding-top: 2rem;
                        border-top: solid 1px #3333331a;
                    }
                    @media screen and (min-width: 768px){
                        
                        .site-content #secondary {
                            justify-content: space-around;
                            flex-direction:row;
                            flex-wrap: wrap;
                            align-items: start;
                        }
                        .site-content #secondary .widget{
                            flex:0 0 45%;
                        }
                    }";
        }
        if($id && 4 == $id){
            
            $outputh_position = ".site-content #secondary{display:none};";
        }
        return $outputh_position;

    }
}

// enqueue google font if is established
if(!function_exists('solido_get_google_fonts')) {

    function solido_get_google_fonts(){

        $solido_options = get_theme_mod('solido_options');

        if(!isset($solido_options['typography'])){
            return;
        }
        
        $solido_typography = $solido_options['typography'];

        $google_fonts = array();
                    
        $protocol = is_ssl() ? 'https' : 'http';
        
        $weight_font=':100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
    
        if(isset( $solido_typography['titles_googlefont'])
            && isset($solido_typography['titles_face']) 
            && $solido_typography['titles_face'] == 'Google Fonts' 
            && !empty( $solido_typography['titles_googlefont']) 
            && !in_array($solido_typography['titles_googlefont'],$google_fonts)){

            array_push($google_fonts,$solido_typography['titles_googlefont']);
            $titles_font = $solido_typography['titles_googlefont'];
            $titles_font.= $weight_font;
            wp_register_style( 'solido-google-fonts-titles', $protocol .'://fonts.googleapis.com/css?family=' .$titles_font );
            wp_enqueue_style( 'solido-google-fonts-titles' );
        }
        
        if(isset($solido_typography['texts_googlefont']) 
            && isset($solido_typography['texts_face']) 
            && $solido_typography['texts_face'] == 'Google Fonts' 
            && !empty($solido_typography['texts_googlefont']) 
            && !in_array($solido_typography['texts_googlefont'],$google_fonts)){

                array_push($google_fonts,$solido_typography['texts_googlefont']);
                $texts_font = $solido_typography['texts_googlefont'];
                $texts_font.= $weight_font;
                wp_register_style( 'solido-google-fonts-texts', $protocol ."://fonts.googleapis.com/css?family=" .$texts_font );
                wp_enqueue_style( 'solido-google-fonts-texts' );
        }

        if(isset($solido_typography['site_title_googlefont']) 
            && isset($solido_typography['site_title_face']) 
            && $solido_typography['site_title_face'] == 'Google Fonts' 
            && !empty($solido_typography['site_title_googlefont']) 
            && !in_array($solido_typography['site_title_googlefont'],$google_fonts)){

                array_push($google_fonts,$solido_typography['site_title_googlefont']);
                $site_title_font = $solido_typography['site_title_googlefont'];
                $site_title_font.= $weight_font;
                wp_register_style( 'solido-google-fonts-site_title', $protocol ."://fonts.googleapis.com/css?family=" .$site_title_font );
                wp_enqueue_style( 'solido-google-fonts-site_title' );
        }

        if(isset($solido_typography['site_description_googlefont']) 
            && isset($solido_typography['site_description_face']) 
            && $solido_typography['site_description_face'] == 'Google Fonts' 
            && !empty($solido_typography['site_description_googlefont']) 
            && !in_array($solido_typography['site_description_googlefont'],$google_fonts)){

                array_push($google_fonts,$solido_typography['site_description_googlefont']);
                $site_description_font = $solido_typography['site_description_googlefont'];
                $site_description_font.= $weight_font;
                wp_register_style( 'solido-google-fonts-site_description', $protocol ."://fonts.googleapis.com/css?family=" .$site_description_font );
                wp_enqueue_style( 'solido-google-fonts-site_description' );
        }

        if(isset($solido_typography['menu_header_googlefont']) 
            && isset($solido_typography['menu_header_face']) 
            && $solido_typography['menu_header_face'] == 'Google Fonts' 
            && !empty($solido_typography['menu_header_googlefont']) 
            && !in_array($solido_typography['menu_header_googlefont'],$google_fonts)){

                array_push($google_fonts,$solido_typography['menu_header_googlefont']);
                $menu_header_font = $solido_typography['menu_header_googlefont'];
                $menu_header_font.= $weight_font;
                wp_register_style( 'solido-google-fonts-menu_header', $protocol ."://fonts.googleapis.com/css?family=" .$menu_header_font );
                wp_enqueue_style( 'solido-google-fonts-menu_header' );
        }

    }
}

add_action( 'wp_enqueue_scripts', 'solido_get_google_fonts' );


//create array with font face , google font or regular

function solido_get_font_face(){

    $solido_options = get_theme_mod('solido_options');
    if(!isset($solido_options['typography'])){
        return;
    }
    $solido_typography = $solido_options['typography'];

    $font_face = array();
    $font_face['titles'] = isset($solido_typography['titles_face']) && $solido_typography['titles_face'] == 'Google Fonts' ? $solido_typography['titles_googlefont'] : $solido_typography['titles_face'];
    $font_face['texts'] = isset($solido_typography['texts_face']) && $solido_typography['texts_face'] == 'Google Fonts' ? $solido_typography['texts_googlefont'] : $solido_typography['texts_face'];
    $font_face['menu_header'] = isset($solido_typography['menu_header_face']) && $solido_typography['menu_header_face'] == 'Google Fonts' ? $solido_typography['menu_header_googlefont'] : $solido_typography['menu_header_face'];
    $font_face['site_title'] = isset($solido_typography['site_title_face']) && $solido_typography['site_title_face'] == 'Google Fonts' ? $solido_typography['site_title_googlefont'] : $solido_typography['site_title_face'];
    $font_face['site_description'] = isset($solido_typography['site_description_face']) && $solido_typography['site_description_face'] == 'Google Fonts' ? $solido_typography['site_description_googlefont'] : $solido_typography['site_description_face'];
    
    return $font_face;
}

function show_site_branding(){

    return get_theme_mod('solido-show-site-branding',true) ? 'block':'none';

}

// check if theme_mod option is saved , if don`t saved return default value (customizer-defaults.php)
 function solido_get_theme_mod($path=null, $option){

    $defaults = defaults_customizer();
    $solido_options = get_theme_mod('solido_options');

    if($path){
        return isset($solido_options[$path][$option]) ? $solido_options[$path][$option] : $defaults[$path][$option];
    }else{
        return isset($solido_options[$option]) ? $solido_options[$option] : $defaults[$option];
    }

} 
    