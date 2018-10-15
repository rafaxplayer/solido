<?php
/**
 * The template for displaying the front-page
 *
 *  
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solido
 * 
 * Template Name: Landing Page
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

get_header();?>
<div id="primary" class="content-area">
    
	<main id="main" class="site-main">
    <?php // Show the selected frontpage content.

            if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page-front' );
            endwhile;
        else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
            get_template_part( 'template-parts/content', 'none' );
        endif; 
        
        do_action( 'solido_get_panels' );
        
        ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php

get_footer();
