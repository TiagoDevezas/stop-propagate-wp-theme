<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stop_PropagHate_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-near-white bt b--light-gray">
		<div class="site-info center mw8 pv5 flex items-start mid-gray">
			<img src="<?php echo get_template_directory_uri() . '/images/sph_logo.svg' ?>" class="h2 mr6" alt="Stop PropagHate"></img>
			<div class="legal" style="flex-grow: 1;">
				<p class="mt0 f5 lh-copy avenir fw5 ttu tracked">
					PARTNERS
				</p>
				<div class="flex flex-wrap justify-between">
					<img src="<?php echo get_template_directory_uri() . '/images/google-dni-logo.png' ?>" class="h3" alt="Stop PropagHate"></img>
					<img src="<?php echo get_template_directory_uri() . '/images/inesctec_logo.png' ?>" class="h3" alt="Stop PropagHate"></img>
					<img src="<?php echo get_template_directory_uri() . '/images/feup_logo.png' ?>" class="h3" alt="Stop PropagHate"></img>
				</div>
			</div>

			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'stop-propaghate-theme' ) ); ?>"> -->
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'stop-propaghate-theme' ), 'WordPress' );
				?>
			<!-- </a> -->
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'stop-propaghate-theme' ), 'stop-propaghate-theme', '<a href="http://underscores.me/">Tiago Devezas</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
