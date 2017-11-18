<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebflowStarter
 */

?>

	</div><!-- #content -->

	<div class="w-section">
		<div class="container w-container">
			<footer id="colophon" class="site-footer">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'webflowstarter' ) ); ?>"><?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'webflowstarter' ), 'WordPress' );
					?></a>
					<span class="sep"> | </span>
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'webflowstarter' ), 'webflowstarter', '<a href="http://phenomblue.com/">Phenomblue</a>' );
					?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
