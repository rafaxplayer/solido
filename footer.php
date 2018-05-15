<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solido
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<?php do_action('solido_button_up'); ?>
		<div class="footer-widgets">

			<?php do_action( 'solido_footer_widgets'); ?>
			
		</div>
		<div class="site-info">
			<?php
				$solido_options = get_theme_mod('solido_options');
			    if(isset($solido_options['footer-copy']) && $solido_options['footer-copy']):
				/*copy*/
					printf( esc_html__( '&copy;%1$s %2$s | ', 'solido' ), date('Y') , get_bloginfo( 'name' ));
				endif;
			?>
			<span class="footer-text">
			<?php
				
				if(isset($solido_options['footer-text']) && !empty($solido_options['footer-text'])):
				    printf( esc_html( $solido_options['footer-text'] )) ;
				else:
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'solido' ), 'solido', '<a href="http://juanrafaelsimarro.com/">jR.simarro</a>' );
			    endif;
			?>

            </span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
