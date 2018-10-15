<?php
/**
 * The template for displaying the front-page
 *
 *  
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solido
 * 
 * Template Name: User Template Page
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<div id="primary" class="content-area">
    
	<main id="main" class="site-main">
    <?php // Show the selected frontpage content.

        if ( have_posts() ) :
            while ( have_posts() ) : the_post();?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID) ?>)">
                <div class="header-wraper">
                    <div class="avatar" style="background-image:url(<?php echo get_theme_mod('template-user-image',get_template_directory_uri().'/assets/images/profile.jpg') ?>)"></div>
                    <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                    <div class="user-description"><?php echo get_theme_mod('solido_tempate_user_desc', 'Soy Desarrollador') ?></div>
                </div>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <?php
                        the_content();
        
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'solido' ),
                            'after'  => '</div>',
                        ) );
                    ?>
                </div><!-- .entry-content -->
            <?php if ( get_edit_post_link() ) : ?>
                <footer class="entry-footer">
                    <?php
                        edit_post_link(
                            sprintf(
                                wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __( 'Edit <span class="screen-reader-text">%s</span>', 'solido' ),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                get_the_title()
                            ),
                            '<span class="edit-link"><i class="fas fa-pencil-alt">&nbsp;</i>',
                            '</span>'
                        );
                    ?>
                </footer><!-- .entry-footer -->
            <?php endif; ?>

            </article><!-- #post-<?php the_ID();  
            endwhile;
        else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
            get_template_part( 'template-parts/content', 'none' );
        endif; ?>

    </main>
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
