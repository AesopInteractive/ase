<?php 

/*
* Template Name: Front Page
*/

get_header();?>

<div class="aesop-entry-content ase-front-page">

	<div class="ase-section ase-features">
		<div class="ase-content clearfix">
			<h2 class="aesop-timeline-stop">Aesop Story Engine Features</h2>
			<p class="ase-italic ase-welcome-blurb"><span class="ase-bold">Choose from thirteen unique story components</span>, then arrange them in any order and customize them to weave your narrative--right in the WordPress post or page editor. Need big, eye-catching images? Handled. How about a few columns of content with images and captions? An image gallery? How about an audio podcast? They're all no problem. Full-width videos? Piece of cake. Even timelines and story collections are built in.</p>
			<?php echo do_shortcode('[aesop_image img="/wp-content/themes/ase/assets/img/aesop-ui.png" caption="Create rich, interactive stories with our easy-to-use plugin interface right in the WordPress editor!" align="center" captionposition="left" lightbox="off" imgwidth="100%" alt="aesop story engine"]');?>
		</div>
	</div>

	<div id="ase-features" class="ase-section ase-components">
		<div class="ase-content clearfix">

			<h2 class="ase-components-title">Thirteen Unique Story Components</h2>

			<div class="row">
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="media-comp">Audio & Video</h2>
						<p>Display an audio player with MP3 support, or a video player with YouTube, Vimeo, and more.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="chap-comp">Chapters</h2>
						<p>Break up a story into multiple chapters with easy scroll-to points.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="cont-comp">Content</h2>
						<p>Display a background image or color, or split content into multiple columns.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="char-comp">Character</h2>
						<p>This component displays an avatar, title, and short bio to remind you of key characters.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="quote-comp">Quote</h2>
						<p>Control the text color and background on this full width component featuring large type.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="par-comp">Parallax</h2>
						<p>A full width image component with caption and lightbox that moves as you scroll.</p>
					</div>
				</div>
			</div>
			 <div class="row">
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="img-comp">Image</h2>
						<p>An image and caption you can align and offset; open a larger version in an optional lightbox.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="gall-comp">Gallery</h2>
						<p>Create unlimited grid, thumbnail, or stacked galleries-all with caption support</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="loc-comp">Location</h2>
						<p>Create a map for your story that displays markers with your custom messages on them.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="time-comp">Timeline</h2>
						<p>Segement a story into sections so readers can scroll to a story milestone with a single click.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="doc-comp">Documents</h2>
						<p>Once a reader clicks this component they can view an uploaded PDF or image file.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ase-comp-col">
						<h2 class="coll-comp">Collections</h2>
						<p>Display a collection of stories from the same category on any page of your site.</p>
					</div>
				</div>
			</div>
			<?php echo get_template_part('partials/red-btn');?>

		</div>
	</div>

	<div id="ase-reviews" class="ase-section ase-reviews">
		<div class="ase-content">
			<h2 class="aesop-timeline-stop">Reviews</h2>
			<div class="row">
				<div class="col-md-6 ase-review-col">
					<img src="<?php echo ASE_URL.'/assets/img/forrester.jpeg';?>" alt="mark forrester woothemes">
					<blockquote class="ase-review-quote">
					  	<p>At WooThemes we love to back innovation upon WordPress, especially when that innovation unobtrusively extends the content publishing experience and a theme’s capabilities - solving problems for theme developers and end users. Well done Aesop.</p>
					  	<footer>
					  		<cite><strong>Mark Forrester</strong>, Co-founder WooThemes</cite>
					  	</footer>
					</blockquote>
				</div>
				<div class="col-md-6 ase-review-col">
					<img src="<?php echo ASE_URL.'/assets/img/gooding.jpeg';?>" alt="sarah gooding wp tavern">
					<blockquote class="ase-review-quote">
						<p>The Aesop Story Engine is one of the most beautiful tools for WordPress that I've seen in a long time.</p>
					  	<footer>
					  		<cite><strong>Sarah Gooding</strong>, WP Tavern</cite>
					  		<a href="http://wptavern.com/aesop-story-engine-an-open-source-wordpress-plugin-for-storytelling">An Open Source WordPress Plugin for Storytelling</a>
					  	</footer>
					</blockquote>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 ase-review-col">
					<img src="<?php echo ASE_URL.'/assets/img/knowles.png';?>" alt="chris knowles wpmu">
					<blockquote class="ase-review-quote">
					  	<p>The ASE potentially takes WordPress’ content capabilities to a new level of maturity and sophistication. More than that though, it represents everything that WordPress stands for: democratizing publishing.</p>
					  	<footer>
					  		<cite><strong>Chris Knowles</strong>, WPMU</cite>
					  		<a href="http://premium.wpmudev.org/blog/aesop-story-engine-the-next-big-thing-in-wordpress/">Aesop Story Engine: The Next Big Thing For WordPress?</a>
					  	</footer>
					</blockquote>
				</div>
				<div class="col-md-6 ase-review-col">
					<img src="<?php echo ASE_URL.'/assets/img/krogsgard.jpeg';?>" alt="brian krogsgard post status">
					<blockquote class="ase-review-quote">
					  	<p>Aesop reduces the barrier for smaller journalism organizations to create these stories; and there are many such organizations that don’t have full time developers on staff to build custom story designs.</p>
					  	<footer>
					  		<cite><strong>Brian Krogsgard</strong></cite>
					  		<a href="http://www.poststat.us/aesop-medium-esque-story-engine-wordpress/">Aesop, a Medium-esque “story engine” for WordPress</a>
					  	</footer>
					</blockquote>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 ase-review-col">
					<img src="<?php echo ASE_URL.'/assets/img/weller.jpeg';?>" alt="nathan weller elegant themes">
					<blockquote class="ase-review-quote">
					  	<p>The beauty of this approach is that it will provide massive value at the free level and at the same time open up all kinds of new possibilities for ALL theme developers interested in servicing this niche.</p>
					  	<footer>
					  		<cite><strong>Nathan Weller</strong>, for Elegant Themes</cite>
					  		<a href="https://www.elegantthemes.com/blog/editorial/storytelling-an-emerging-niche-in-wordpress">Storytelling: An Emerging Niche In The WordPress Market</a>
					  	</footer>
					</blockquote>
				</div>
				<div class="col-md-6 ase-review-col">
					<img src="<?php echo ASE_URL.'/assets/img/collis.png';?>" alt="collis ta'eed envato">
					<blockquote class="ase-review-quote">
					  	<p>Aesop's storytelling engine is a huge win for fans of dedicated, distraction-free reading experiences. It's a win for the web.</p>
					  	<footer>
					  		<cite><strong>Collis Ta'eed</strong>, CEO - Envato</cite>
					  	</footer>
					</blockquote>

				</div>
			</div>
		</div>
	</div>

	<div id="ase-resources" class="ase-section ase-resources">
		<div class="ase-content">
			<h2 class="aesop-timeline-stop">Resources</h2>
			<div class="row">
				<div class="col-md-4">
					<a href="/quick-start-guide"><img class="ase-img" src="<?php echo ASE_URL.'/assets/img/resources-quick-start.png';?>" alt="resources quick start"></a>
					<div class="ase-resource">
						<h3>Quick Start Guide</h3>
						<p>Get Aesop Story Engine up and running in any theme with these quick tutorials.</p>

					</div>
					<a class="btn btn-primary" href="/quick-start-guide">Get started</a>
				</div>
				<div class="col-md-4">
					<a href="/library/category/themes"><img class="ase-img" src="<?php echo ASE_URL.'/assets/img/resources-themes.png';?>" alt="aesop resources themes"></a>
					<div class="ase-resource">
						<h3>Aesop Themes</h3>
						<p>Sure, Aesop works with any theme, but these have been built specifically for storytelling.</p>
					</div>
					<a class="btn btn-primary" href="/library/category/themes">See all themes</a>
				</div>
				<div class="col-md-4">
					<a href="/library/category/add-ons"><img class="ase-img" src="<?php echo ASE_URL.'/assets/img/resources-add-ons.png';?>" alt="aesop resources add-ons"></a>
					<div class="ase-resource">
						<h3>Add-ons</h3>
						<p>Plugins to add lazy image loading, and Google Analytics integration to Aesop Story Engine.</p>
					</div>
					<a class="btn btn-primary" href="/library/category/add-ons">View add-ons</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="/documentation"><img class="ase-img" src="<?php echo ASE_URL.'/assets/img/resources-docs.png';?>" alt="aesop resource documentation"></a>
					<div class="ase-resource">
						<h3>Documentation</h3>
						<p>Get Aesop Story Engine up and running in any theme with these quick video tutorials.</p>
					</div>
					<a class="btn btn-primary" href="/documentation">Read the docs</a>
				</div>
				<div class="col-md-4">
					<a href="/developers"><img class="ase-img" src="<?php echo ASE_URL.'/assets/img/resources-devs.png';?>" alt="aesop resource developer documentation"></a>
					<div class="ase-resource">
						<h3>Developer Portal</h3>
						<p>Interested in building themes and add-ons for Aesop? This place is just for you.</p>
					</div>
					<a class="btn btn-primary" href="/developers">Write some code</a>
				</div>
				<div class="col-md-4">
					<a href="/blog"><img class="ase-img" src="<?php echo ASE_URL.'/assets/img/resources-blog.png';?>" alt="aesop resource blog"></a>
					<div class="ase-resource">
						<h3>The Latest</h3>
						<p>Catch up with the latest Aesop themes, add-ons, tips, tutorials, and original stories.</p>
					</div>
					<a class="btn btn-primary" href="/blog">Read the latest</a>
				</div>
			</div>
		</div>

	</div>

</div>


<?php get_footer();
