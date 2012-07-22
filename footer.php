<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Zomghow
 * @since Zomghow 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
	<?php if ( is_active_sidebar( 'first-footer-widget-area' ) || is_active_sidebar( 'second-footer-widget-area' ) || is_active_sidebar( 'third-footer-widget-area' ) || is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
				<div id="footer-widgets">
					<?php get_sidebar( 'footer' ) ?>
				</div>
	<?php endif; ?>
			
			
		<div class="site-info">
		
			<?php do_action( 'zomghow_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'zomghow' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'zomghow' ), 'WordPress' ); ?></a>
			<a class="darren" href="http://darrenmeehan.me/" title="<?php esc_attr_e( 'Theme by Darren', 'zomghow' ); ?>"><?php printf( __( 'Theme by %s', 'zomghow' ), 'Darren' ); ?></a>
		
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>