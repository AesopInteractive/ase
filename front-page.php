<?php 

/*
* Template Name: Front Page
*/

get_header();

 ?>



	<div class="aesop-entry-content ase-front-page">

		<div class="ase-section ase-features">
			<div class="ase-content clearfix">
				<?php echo do_shortcode('[aesop_timeline_stop num="Features" title="Aesop Story Engine Features"]');?>
				<p class="ase-italic"><span class="ase-bold">Choose from twelve unique story components</span>, then arrange them in any order and customize them to weave your narrative--right in the WordPress post or page editor. Need big, eye-catching images? Handled. How about a few columns of content with images and captions? An image gallery? How about an audio podcast? They're all no problem. Full-width videos? Piece of cacke. Even timelines and story collections are built in.</p>
				<?php echo do_shortcode('[aesop_image img="/wp-content/themes/ase/assets/img/aesop-ui.png" caption="Create rich, interactive stories with our easy-to-use plugin interface right in the WordPress editor!" align="center" captionposition="left" lightbox="off" imgwidth="100%"]');?>
			</div>
		</div>

		<div class="ase-section ase-components">
			<div class="ase-content clearfix">

				<h2>Twelve Unique Story Components</h2>

				<div class="row">
					<div class="col-md-4">
						<div class="ase-comp-col">
							<h2>Audio</h2>
							<p>asdfasdfsdf</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ase-comp-col">
							<h2>Audio</h2>
							<p>asdfasdfsdf</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ase-comp-col">
							<h2>Audio</h2>
							<p>asdfasdfsdf</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ase-comp-col">
							<h2>Audio</h2>
							<p>asdfasdfsdf</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ase-comp-col">
							<h2>Audio</h2>
							<p>asdfasdfsdf</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ase-comp-col">
							<h2>Audio</h2>
							<p>asdfasdfsdf</p>
						</div>
					</div>
				</div>
				<?php echo get_template_part('partials/red-btn');?>

			</div>
		</div>

		<div class="ase-section ase-reviews">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Reviews"]');?>
				<div class="row">
					<div class="col-md-6 ase-review-col">
						<img src="http://placehold.it/100/100">
						<blockquote class="ase-review-quote">
						  	<p>You know the golden rule, don’t you boy? Those who have the gold make the rules.</p>
						  	<footer>
						  		<cite>Sarah Gooding, WP Tavern</cite>
						  		<a href="">An Open Source WordPress Plugin for Storytelling</a>
						  	</footer>
						</blockquote>
					</div>
					<div class="col-md-6 ase-review-col">
						<img src="http://placehold.it/100/100">
						<blockquote class="ase-review-quote">
						  	<p>You know the golden rule, don’t you boy? Those who have the gold make the rules.</p>
						  	<footer>
						  		<cite> Crazy hunch-backed old guy from the movie Aladdi</cite>
						  		<a href="">Link to the quote</a>
						  	</footer>
						</blockquote>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 ase-review-col">
						<img src="http://placehold.it/100/100">
						<blockquote class="ase-review-quote">
						  	<p>You know the golden rule, don’t you boy? Those who have the gold make the rules.</p>
						  	<footer>
						  		<cite>Sarah Gooding, WP Tavern</cite>
						  		<a href="">An Open Source WordPress Plugin for Storytelling</a>
						  	</footer>
						</blockquote>
					</div>
					<div class="col-md-6 ase-review-col">
						<img src="http://placehold.it/100/100">
						<blockquote class="ase-review-quote">
						  	<p>You know the golden rule, don’t you boy? Those who have the gold make the rules.</p>
						  	<footer>
						  		<cite> Crazy hunch-backed old guy from the movie Aladdi</cite>
						  		<a href="">Link to the quote</a>
						  	</footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>

		<div class="ase-section ase-resources">
			<div class="ase-content">
				<?php echo do_shortcode('[aesop_timeline_stop num="Resources" title="The Library"]');?>
				<div class="row">
					<div class="col-md-4">
						<img class="ase-img" src="http://placehold.it/300x180">
						<div class="ase-resource">
							<h3>Quick Start Guide</h3>
							<p>Get Aesop Story Engine up and running in any theme with these quick video tutorials.</p>
						</div>
					</div>
					<div class="col-md-4">
						<img class="ase-img" src="http://placehold.it/300x180">
						<div class="ase-resource">
							<h3>Aesop Themes</h3>
							<p>Sure, Aesop works with any theme, but these have been built specifically for storytelling.</p>
						</div>
					</div>
					<div class="col-md-4">
						<img class="ase-img" src="http://placehold.it/300x180">
						<div class="ase-resource">
							<h3>Add-ons</h3>
							<p>Plugins to add lazy image loading, and Google Analytics integration to Aesop Story Engine.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<img class="ase-img" src="http://placehold.it/300x180">
						<div class="ase-resource">
							<h3>Documentation</h3>
							<p>Get Aesop Story Engine up and running in any theme with these quick video tutorials.</p>
						</div>
					</div>
					<div class="col-md-4">
						<img class="ase-img" src="http://placehold.it/300x180">
						<div class="ase-resource">
							<h3>Developer Portal</h3>
							<p>Interested in building themes and add-ons for Aesop Story Engine? This place is just for you.</p>
						</div>
					</div>
					<div class="col-md-4">
						<img class="ase-img" src="http://placehold.it/300x180">
						<div class="ase-resource">
							<h3>Latest News</h3>
							<p>Catch up with the latest Aesop Story Engine themes, tips, and tutorials.</p>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="ase-section ase-newsletter">
			<div class="ase-content">
				<h2>Aesop Story Engine newsletter</h2>
				<p>Stay up to date with the latest news about fresh Aesop-compatible themes, updates, tutorials, and tips and tricks.</p>
				<p>Sign up for our email newsletter to get all that (and more) delivered right to your email in-box.</p>
				<?php get_template_part('partials/newsform');?>
			</div>
		</div>

	</div>


<?php get_footer();
