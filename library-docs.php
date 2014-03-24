<?php

/*
*	 Template Name: Library Docs
*/



get_header();


 ?>

<main id="main" class="clearfix">



	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<section class="ase-docs">

		<div class="ase-content clearfix aesop-entry-content">

			<div class="ase-docs-left">
				<h3 class="ase-docs-left-title">Library Docs</h3>
				<div class="aesop-timeline"></div>
			</div>
			<div class="ase-docs-right">
				<h2 class="zmt">Product Documentation</h2>

				<p>Here you'll find all the documentation for our themes and add-ons offered through our Library. The first step is to install your plugin or theme, so refer to these steps below.</p>

				<h3>Installing Themes</h3>
				<ul class="ase-step-list unstyled">
					<li>
						<p>Login to your WordPress administration area, and go to Themes-->Appearence.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
					<li>
						<p>At the top of the page, select the "Install Themes" tab.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
					<li>
						<p>Once you are here, select "Upload," then "Choose File" to locate yourtheme.zip on your computer, and install.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
				</ul>

				<p class="ase-doc-note"><span class="label label-primary">note</span> All Aesop Themes include the ability to install Aesop Story Engine from the WordPress.org repo automatically, after theme activation.</p>

				<hr />
				<h3>Installing Plugins</h3>
				<ul class="ase-step-list unstyled">
					<li>
						<p>Login to your WordPress administration area, and go to Plugins-->Add New.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
					<li>
						<p>At the top of the page, select the "Upload" tab.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
					<li>
						<p>Once you are here, select "Upload," then "Choose File" to locate yourplugin.zip on your computer, and install.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
				</ul>

				<?php echo do_shortcode('[aesop_timeline_stop num="Theme | Genji" title="Genji"]');?>
				<p><a href="/library/genji">Genji</a> was our first commercial theme, and it's design is built to serve a simple purpose. There isn't a "story cover" feature in this theme, instead, features a scaled back version that automatically resizes itself. Genji was built to get started with Aesop quickly and easily, but without the barrier of creating beautiful covers and stories.</p>

				<p>All themes include an "owners-manual." This is included within your theme download, and contains additional information specific to your theme. Please refer to your products owners-manual for detailed instructions.</p>

				<h3>Options Overview</h3>
				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>Site Logo</dt>
					<dd>Upload an optional logo to be displayed in place of the site title..</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Background</dt>
					<dd>Controls the background color of the site.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Text</dt>
					<dd>This controls the overall text colors.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Link</dt>
					<dd>This controls the overall color of the themes links.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Footer Text</dt>
					<dd>Change the sites footer text. Some HTML is O.K..</dd>
					</dl>
				</div>

				<p class="ase-doc-note"><span class="label label-primary">tip</span> If you'd like to replicate the demo content, import this XML file into Tools--Import within WordPress admin.</p>

				<p class="ase-doc-note"><span class="label label-warning">note</span>Developers, refer to the owners-manual in the theme download for documentation on how to set up a child theme, as well as how to utilize the included dev tools.</p>

				<?php echo do_shortcode('[aesop_timeline_stop num="Theme | Jorgen" title="Jorgen"]');?>
				<p><a href="/library/jorgen">Jorgen</a> is a completely replicate of our Playground Demo site, and was built as a theme after numerous requests. The demo theme was built to showcase what Aesop can do when coupled with a storytelling theme, and Jorgen expands on this by adding a few more Story Cover options, comments, and complete color control.</p>

				<p>All themes include an "owners-manual." This is included within your theme download, and contains additional information specific to your theme. Please refer to your products owners-manual for detailed instructions.</p>

				<h3>Options Overview</h3>
				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>Background</dt>
					<dd>Controls the background color of the site.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Text</dt>
					<dd>This controls the overall text colors.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Link</dt>
					<dd>This controls the overall color of the themes links.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Width</dt>
					<dd>Change the width of the text content within the story.</dd>
					</dl>
				</div>

				<h3>Story Cover</h3>

				<p>The story cover uses the Featured Image option located in WordPress admin when writing each post. If the image is perhaps too light, or dark, you can add a "mask" and adjust it's opacity, as well as change the color of the text using the custom Story Cover controls. With the Story Cover feature, you can also set a "block style" cover, which slightly resembles a book cover with big, responsive type.</p>

				<p>Start by first setting a cover image using the Featured Image area, then from there, adjust the cover using the controls. Descriptions of these controls are as follows. The unique thing about Jorgen, is that each story can have an independant design. The options below, cover these individual story design options. These options only affect the story that you change them on.</p>

				<h5>Cover Setup</h5>
				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>Cover Text Color</dt>
					<dd>Controls the color of the text on the story color.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Story Background Color</dt>
					<dd>This controls the overall background color of the story.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Story Text Color</dt>
					<dd>This controls the overall color of the story text.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Story Cover Mask Color</dt>
					<dd>Sometimes your cover image can be too light or dark, so you can apply a "mask" and set the color here. Black, is a great place to start if you're not sure.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Story Cover Mask Opacity</dt>
					<dd>After applying the mask, specify the opacity, or how "see through" it is. 0.2 is a great place to start if you're not sure.</dd>
					</dl>

				</div>

				<h5>Cover Layout</h5>
				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>Style</dt>
					<dd>Jorgen ships with two different cover type styles. You can have it as a "minimal" setup or a "block" style setup. If you choose "block" style, then you can use the options below. Otherwise the options below have no effect. Again, these are specific to each individual story.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Cover Lines 1 - 5 </dt>
					<dd>If you are using Block cover style, Jorgen will attempt to split the title on its own. However, you can override this with the lines 1-5. Use any, or all lines.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Maximum Font Size</dt>
					<dd> If you don't have a lot of text, the font size will likely be ginormous. Put in a maximum, like 400.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Maximum Title Width</dt>
					<dd>What't the maximum overall width size of the block style text? Default is 70% of the width of the screen.</dd>
					</dl>
				</div>
				<p class="ase-doc-note"><span class="label label-primary">tip</span> If you'd like to replicate the demo content, import this XML file into Tools--Import within WordPress admin.</p>

				<p class="ase-doc-note"><span class="label label-warning">note</span>Developers, refer to the owners-manual in the theme download for documentation on how to set up a child theme, as well as how to utilize the included dev tools.</p>

				<?php echo do_shortcode('[aesop_timeline_stop num="Plugin | Aesop Social" title="Aesop Social Add-on"]');?>
				<p>The Aesop Social plugin will take care of adding Facebook Open Graph meta tags, Twitter meta cards, and will also save your social link profiles, in addition Google Authorship, and Google Analytics integrations. You can take these settings with you from Aesop theme to Aesop theme.</p>

				<p>All settings are entered with the Theme Customizer. While logged in, head to Appearence-->Customize, and click the Aesop Social tab.</p>

				<h5>Social Options</h5>
				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>Enable Twitter Cards</dt>
					<dd>sdfsdf.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Enable FB Open Graph</dt>
					<dd>Isdfsdf.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Google Analytics</dt>
					<dd>asdfasdf</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Facebook App ID</dt>
					<dd>sdfasdfsadf</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Twitter Handle</dt>
					<dd>sdfasdfsadf</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Google+ Profile URL</dt>
					<dd>sdfasdfsadf</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>Facebook URL</dt>
					<dd>asdfsadf.</dd>
					</dl>
				</div>

				<?php echo do_shortcode('[aesop_timeline_stop num="Plugin | Lazy Loader" title="Aesop Lazy Loader"]');?>
				<p>The Aesop Lazy Loader add-on will convieniently optimize the loading of the images within your site. It's important to note that this plugin doesn't have any options, and just works "automatically" with all Aesop Story Engine components.</p>

				<p>If you'd like to add the lazy loading affect to other images, just add the class <code>.aesop-lazy-img</code>.</p>


				<?php echo do_shortcode('[aesop_timeline_stop num="Plugin | Character Carousel" title="Aesop Character Carousel"]');?>
				<p>Character Carousel is a great way to show multiple characters in a story without any code at all. You can create and manage unlimited carousels, all within WordPress.</p>
			</div><!-- end docs right-->

		</div>
	</section>

	<?php endwhile;endif; ?>


</main>


<?php get_footer();