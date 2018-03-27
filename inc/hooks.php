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
        
        if((!isset($solido_options['show-slider']) || !$solido_options['show-slider']) || !is_front_page()){
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

if(!function_exists('solido_front_page_panels')){

    function solido_front_page_panels(){

        $solido_options = get_theme_mod('solido_options');

        if(isset($solido_options['show-panel-services'])){

            if(true===$solido_options['show-panel-services']){
            ?>
                <section id="solido-services">
                <?php 

                $cat = isset($solido_options['panel-services-cat']) && !empty($solido_options['panel-services-cat']) ? $solido_options['panel-services-cat'] : 'service';
                
                $query_services = new WP_Query( array(
                    'post_type'     =>  'post',
                    'category_name' =>  $cat,
                 ));

                if($query_services->have_posts()):
                    while ( $query_services->have_posts() ) : $query_services->the_post();
                    ?>
                    <div class="service-wrap">
                        <div class="service-image" style="background-image:url(<?php echo esc_url(the_post_thumbnail_url('solido-services'));?>);">
                            
                            <?php the_title('<div class="info"><h2>','</h2></div>' );?>
                            
                        </div>
                        <div class="service-content">
                            <?php solido_get_excerpt(20); ?>
                        </div>
                    </div>
                    <?php
                    endwhile;
                endif;
             
                wp_reset_postdata()
                ?>
                </section>
            <?php
            }
        }
        if(isset($solido_options['show-panel-team'])){

            if(true === $solido_options['show-panel-team']){
                $textTeam = isset($solido_options['panel-text-team']) ? $solido_options['panel-text-team'] : __('Team Us','solido');
            ?>
                <section id="solido-team">
                    <h2 id="team-text"><?php echo $textTeam; ?></h2>
                <?php 

                   $cat = isset($solido_options['panel-team-cat']) && !empty($solido_options['panel-team-cat']) ? $solido_options['panel-team-cat'] : 'team';

                    $query_team = new WP_Query( array(
                        'post_type'     =>  'post',
                        'category_name' =>  $cat,
                        'post_per_page' =>  12,

                    ) );

                    if($query_team->have_posts()):
                        while ( $query_team->have_posts() ) : $query_team->the_post();
                        ?>
                        <div class="team-wrap">
                            <div class="team-image">
                                <?php the_post_thumbnail('solido-team');?>
                                <?php the_title('<h3>','</h3>' );?>
                                
                            </div>
                            <div class="team-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php
                        endwhile;
                    endif;

                    wp_reset_postdata();
                    ?>
                </section>
            <?php
            }
        }

        if(isset($solido_options['show-panel-contact'])){

            if(true === $solido_options['show-panel-contact']){
               
                $imageContact = isset($solido_options['panel-image-contact']) ? $solido_options['panel-image-contact'] : get_template_directory_uri().'/assets/images/contact.jpg';
                $textContact = isset($solido_options['panel-text-contact']) && !empty($solido_options['panel-text-contact'])? $solido_options['panel-text-contact'] : __('Want to know more about us?
                ','solido');
                $linkContact = isset($solido_options['panel-link-contact']) && !empty($solido_options['panel-link-contact'])? $solido_options['panel-link-contact'] : '#';
                $buttonContact = isset($solido_options['panel-button-contact']) && !empty($solido_options['panel-button-contact'])? $solido_options['panel-button-contact'] : __('Contact us?
                ','solido');
            ?>
                <section id="solido-contact">
                    <div class="contact-wrap" style="background-image:url(<?php echo $imageContact; ?>);">
                        <div class="info">
                            <h3 id="contact-text"><?php echo esc_html($textContact);?></h3>
                            <a id="contact-button" href="<?php echo esc_url($linkContact); ?>"><?php echo esc_html($buttonContact); ?></a>
                        </div>
                       
                    </div>
                    
                </section>
            <?php
            }
            
        }
    }
}
add_action( 'solido_get_panels','solido_front_page_panels', 10, 0 );

