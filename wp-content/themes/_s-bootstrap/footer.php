<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s_robotwholearned_theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', '_s_robotwholearned_theme-bootstrap' ) ); ?>"><?php printf( __( 'Proudly powered by %s', '_s_robotwholearned_theme-bootstrap' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_s_robotwholearned_theme-bootstrap' ), '_s_robotwholearned_theme-bootstrap-bootstrap', 'robotwholearned inc.' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
