<?php

if(!function_exists('footer_widgets')){

    function footer_widgets(){

        if ( is_active_sidebar( 'footer-widgets-1' ) ) : ?>
			<div class="footer-widgets-area">
                <?php dynamic_sidebar( 'footer-widgets-1' ); ?>
            </div>
        <?php endif; 

        if ( is_active_sidebar( 'footer-widgets-2' ) ) : ?>
            <div class="footer-widgets-area">
                <?php dynamic_sidebar( 'footer-widgets-2' ); ?>
            </div>
        <?php endif; 

        if ( is_active_sidebar( 'footer-widgets-3' ) ) : ?>
            <div class="footer-widgets-area">
                <?php dynamic_sidebar( 'footer-widgets-3' ); ?>
           </div>
        <?php endif;
    }
}
add_action( 'solido_footer_widgets', 'footer_widgets' );

if(!function_exists('button_up')){

    function button_up(){

     ?>
        <div class="button-up">
            <i class="fas fa-angle-up"></i>
        </div>
			
    <?php 
    }
}
add_action( 'solido_button_up', 'button_up' );

if(!function_exists('solido_slider')){
    function solido_slider(){
        $solido_options = get_theme_mod('solido_options');
        
        if(!isset($solido_options['show-slider']) || !$solido_options['show-slider']){
            return;
        }
        

        $query = new WP_Query( array(
            'posts_per_page' => '10',
            'category_name'=>'slider',
        ));
        
        if( $query->have_posts()) {
            ?><div class="bxslider">
           <?php while ( $query->have_posts() ) {
                $query->the_post();
                get_template_part('/template-parts/content', 'slider' );
            }
            wp_reset_postdata();
            ?>
           </div><?php
        } 
   }
}
add_action( 'solido_show_slider','solido_slider', 10, 0 );
