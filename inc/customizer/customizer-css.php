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
            align-items: center;}";

        $solido_options = get_theme_mod('solido_options');
        $id = $solido_options['header_menu_position'];

        if($id && 2 == $id){
            $outputh_header ="
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
            $outputh_header="
                .header-wrapp {
                    display: flex;
                    justify-content: space-between;
                    flex-direction: column;
                    align-items: center;}
                .site-branding {
                    text-align:center;}";
        }
        return $outputh_header;
    }

}

//css for colors 
if(!function_exists('solido_custom_colors_fonts')){

    function solido_custom_colors_fonts(){

        $font_face = solido_get_font_face();
        $primary_color = solido_get_theme_mod('colors','primary-color');

        $outputh_colors = "
            .site-header{background-color:". $primary_color.";}
            a{color:" . solido_get_theme_mod('colors','links-color') . "}
            .site-title{font-size:". solido_get_theme_mod('typography','header_title_fontsize').";}
            a:hover{color:". solido_get_theme_mod('colors','links-hover-color').";}
            .site-title a,.site-description {color: #".get_header_textcolor().";}
            .site-title a,.entry-title,.entry-title a,.widget h2{ font-family:".$font_face['titles'].";font-style:". solido_get_theme_mod('typography','titles_fontstyle') .";font-weight:". solido_get_theme_mod('typography','titles_fontweight').";}
            .entry-content p{font-family:" . $font_face['texts'] .";color:".solido_get_theme_mod('colors','paragraphs-color').";font-size:". solido_get_theme_mod('typography','texts_fontsize').";font-style:".solido_get_theme_mod('typography','texts_fontstyle').";font-weight:". solido_get_theme_mod('typography','texts_fontweight')."}
            .entry-title,.entry-title a,.widget h2,#comments h2{color:". solido_get_theme_mod('colors','titles-color').";}
            .entry-footer,.entry-footer a,.entry-meta,.entry-meta a{color:". solido_get_theme_mod('colors','links-color').";}
            .entry-footer a:hover,.entry-meta a:hover,.widget a:hover,.slider-item .more a:hover{color:".solido_get_theme_mod('colors','links-hover-color').";}
            .widget h2:before,#comments h2:before{background-color:".$primary_color."}
            .widget a{color:#282828}
            .main-navigation ul a{color:". solido_get_theme_mod('colors','header-menu-text-color').";}
            .main-navigation ul a:hover{color:". solido_get_theme_mod('colors','header-menu-text-hover-color').";}
            @media screen and (min-width:37.5em){
                .main-navigation>div>ul{background-color:transparent;}
                .main-navigation .current-menu-item a{color:". solido_get_theme_mod('colors','header-menu-active-color').";}
                .main-navigation ul ul,
                .main-navigation>div>ul>li:hover{background-color:". solido_get_theme_mod('colors','header-menu-item-hover-color').";}
                .main-navigation ul ul li:hover{background-color:". solido_darken_color(solido_get_theme_mod('colors','header-menu-item-hover-color')).";}
            }
            .button-up{background-color:". $primary_color."}
            .button-up:hover{background-color:".solido_darken_color($primary_color).";}
            .comment-form .submit{border: 3px solid ".$primary_color.";color:".$primary_color."}
            .comment-form .submit:hover{border: 3px solid ".solido_darken_color($primary_color).";color:".solido_darken_color($primary_color).";}
            .site-info{color:". solido_get_theme_mod('colors','footer-text-color')."}";
            
        
        return $outputh_colors;
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
                padding: 20px;
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
        
        $solido_typography = $solido_options['typography'];
    
        $family_titles = $solido_typography['titles_face'];
        $family_texts = $solido_typography['texts_face'];
            
        $protocol = is_ssl() ? 'https' : 'http';
    
        if( isset( $solido_typography['titles_googlefont']) && $family_titles == 'Google Fonts' && !empty( $solido_typography['titles_googlefont'])){
            $titles_font.=':100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
            wp_register_style( 'solido-google-fonts-titles', $protocol .'://fonts.googleapis.com/css?family=' .$solido_typography['titles_googlefont'] );
            wp_enqueue_style( 'solido-google-fonts-titles' );
        }
    
        if(isset($solido_typography['texts_googlefont']) && $family_texts == 'Google Fonts' && !empty($solido_typography['texts_googlefont'])){
            $texts_font.=':100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
            wp_register_style( 'solido-google-fonts-texts', $protocol ."://fonts.googleapis.com/css?family=" .$solido_typography['texts_googlefont'] );
            wp_enqueue_style( 'solido-google-fonts-texts' );
        }
    }
}

add_action( 'wp_enqueue_scripts', 'solido_get_google_fonts' );


//create array with font face , google font or regular

function solido_get_font_face(){

    $solido_options = get_theme_mod('solido_options');
    $solido_typography = $solido_options['typography'];

    $font_face = array();
    $font_face['titles'] = $solido_typography['titles_face'] == 'Google Fonts' ? $solido_typography['titles_googlefont'] : $solido_typography['titles_face'];
    $font_face['texts'] = $solido_typography['texts_face'] == 'Google Fonts' ?$solido_typography['texts_googlefont'] : $solido_typography['texts_face'];
    return $font_face;
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
    