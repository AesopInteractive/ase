		<footer id="colophon" class="ase-site-footer" role="contentinfo">

			<p class="ase-footer-cred"><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'aesop' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'aesop' ), 'WordPress' ); ?></a></p>

		</footer>

		<div><?php wp_footer(); ?></div>

		<?php do_action('aesop_inside_body_bottom');?>

	</body>

</html>