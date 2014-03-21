		<div class="ase-section ase-newsletter">
			<div class="ase-content">
				<h2>Aesop Story Engine newsletter</h2>
				<p>Stay up to date with the latest news about fresh Aesop-compatible themes, updates, tutorials, and tips and tricks.</p>
				<p>Sign up for our email newsletter to get all that (and more) delivered right to your email in-box.</p>
				<?php get_template_part('partials/newsform');?>
			</div>
		</div>
	</main>
		<footer id="colophon" class="ase-site-footer" role="contentinfo">

			<div class="ase-content">
				<p class="ase-copyright">&copy;2014 Aesopinteractive L.L.C.</p>
				<p class="ase-footer-cred">Proudly built with WordPress and the Aesop Story Engine</p>
				<ul class="ase-footer-links">
					<li><a href="">Terms |</a></li>
					<li><a href="">Privacy Policy |</a></li>
					<li><a href="#top">Back to Top</a></li>
				</ul>
			</div>

		</footer>

		<div><?php wp_footer(); ?></div>

		<?php do_action('aesop_inside_body_bottom');?>

	</body>

</html>