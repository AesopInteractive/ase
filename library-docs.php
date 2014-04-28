<?php

/*
*	 Template Name: Library Docs
*/



get_header();

if(have_posts()) : while(have_posts()) : the_post(); ?>

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
				</li>
				<li>
					<p>At the top of the page, select the "Install Themes" tab.</p>
				</li>
				<li>
					<p>Once you are here, select "Upload," then "Choose File" to locate yourtheme.zip on your computer, and install.</p>
				</li>
			</ul>

			<p class="ase-doc-note"><span class="label label-primary">note</span> All Aesop Themes include the ability to install Aesop Story Engine from the WordPress.org repo automatically, after theme activation.</p>

			<hr />
			<h3>Installing Plugins</h3>
			<ul class="ase-step-list unstyled">
				<li>
					<p>Login to your WordPress administration area, and go to Plugins-->Add New.</p>
				</li>
				<li>
					<p>At the top of the page, select the "Upload" tab.</p>
				</li>
				<li>
					<p>Once you are here, select "Upload," then "Choose File" to locate yourplugin.zip on your computer, and install.</p>

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

			<?php echo do_shortcode('[aesop_timeline_stop num="Plugin | Social" title="Aesop Social Add-on"]');?>
			<p>The Aesop Social plugin will take care of adding Facebook Open Graph meta tags, Twitter meta cards, and will also save your social link profiles, in addition Google Authorship, and Google Analytics integrations. You can take these settings with you from Aesop theme to Aesop theme.</p>

			<p>All settings are entered with the Theme Customizer. While logged in, head to Appearence-->Customize, and click the Aesop Social tab.</p>

			<h5>Social Options</h5>
			<p><strong>Enable Twitter Cards - </strong>Checking this box will integrate Twitter Meta Card data within your site. The "description" is pulled from your post or pages excerpt, and if no description if found, it will fall back to your sites description.</p>
			<p><strong>Twitter Image Fallback - </strong>Here you can provide a fallback image for the Twitter Meta Card Image property. By default it will take your post or pages featured image, but if one is not present, it will fallback to the you upload here.</p>
			<p><strong>Enable Facebook Open Graph - </strong>This works just like the Twitter Meta Card info above, and enables rich sharing within your site.</p>
			<p><strong>Facebook Image Fallback - </strong>Here you can provide a fallback image for the Facebook Open Graph Image property. By default it will take your post or pages featured image, but if one is not present, it will fallback to the you upload here.</p>
			<p><strong>Google Analytics - </strong>Enter your Google Analytics UA-XXXX-XXX code to enable Google Analytics site tracking.</p>
			<p><strong>Facebook App ID - </strong>By providing a Facebook App ID you can enrich the quality of snippets shared from your site.</p>
			<p><strong>Twitter Username - </strong>Provide your Twitter handle. Some themes and especially Twitter Meta cards will use this.</p>
			<p><strong>Facebook Profile or Page URL - </strong>Provide your Facebook page or profile URL, as some Aesop themes will utilize this.</p>
			<p><strong>Google+ Profile URL - </strong>This is helpful for validing your website when setting up a Google+ Profile.</p>

			<h3>Displaying Icons</h3>
			<p>Because we take a "universal" approach to building themes and add-ons, Aesop Social can be used within any of our themes to display social icons. It's up to the theme to determine where to display theme. With Aesop Social, your settings remain in one place, so you can take them with you to the next Aesop theme.</p>

			<p>If you're a developer, there are a few hooks and filters available for you to utilize.</p>

			<code>do_action('ase_addon_social_links');</code>
			<p>Show the icons in any theme by placing the snippet above wherever you'd like the icons to appear. This is typically done within a theme template file.</p>

			<code>aesop_social_message</code>
			<p>This filter allows you to change the default "Find us" message.</p>

			<code>aesop_social_link_list</code>
			<p>This action allows you to add more links to the end of the list.</p>

			<p class="ase-doc-note"><span class="label label-warning">note</span>The new hooks and filters are only available in Aesop Social 1.0.2 and up.</p>


			<?php echo do_shortcode('[aesop_timeline_stop num="Plugin | Lazy Loader" title="Aesop Lazy Loader"]');?>
			<p>The Aesop Lazy Loader add-on will convieniently optimize the loading of the images within your site. It's important to note that this plugin doesn't have any options, and just works "automatically" with all Aesop Story Engine components.</p>

			<p>If you'd like to add the lazy loading affect to other images, just add the class <code>.aesop-lazy-img</code>.</p>


			<?php echo do_shortcode('[aesop_timeline_stop num="Plugin | Character Carousel" title="Aesop Character Carousel"]');?>
			<p>Character Carousel is a great way to show multiple characters in a story without any code at all. You can create and manage unlimited carousels, all within WordPress.</p>

			<p>To get started, head into your WordPress admin area, and click on the Carousels tab on the left. Here you can create a carousel, so go ahead and do so. The name isn't used, and is only for your reference. This carousel uses the Character Component within Aesop Story Engine, so it uses all those options found within it. You can upload an image as an avatar, specify a name, and bio.</p>

			<p>There are only two options available, and that is to automatically start the carousel when the page loads, in addition to specifying how many characters are shown at once.</p>

			<p>After setting up your first carousel, copy and paste the included shortcode on a page or post where you want the carousel to be shown.</p>

			<h5>Carousel Options</h5>
			<div class="ase-doc-atts">
				<dl class="dl-horizontal">
				<dt>Timing</dt>
				<dd>Set this to something like 1000 to have the carousel automatically rotate every 1 second.</dd>
				</dl>
				<dl class="dl-horizontal">
				<dt>Visible Items</dt>
				<dd>Enter a number such as 4 or 7. This will determine how many items will be shown at once.</dd>
				</dl>
				<dl class="dl-horizontal">
				<dt>Enable Pager</dt>
				<dd>Enable or disable the pager that appears below the carousel.</dd>
				</dl>
			</div>

			<?php echo do_shortcode('[aesop_timeline_stop num="Plugin | Story Front" title="Aesop Story Front"]');?>
			<p>The Aesop Story Front add-on, will allow you to choose a specific story as your sites landing page. In other words, you can choose a story to appear on the front of your site, so when someone visits your site, they see your chosen story.</p>

			<p>Setup is a snap, and is covered in just a few steps below.</p>

			<p class="ase-doc-note"><span class="label label-warning">warning</span>This add-on is currently <strong>only</strong> compatible with <a href="/library/jorgen">Jorgen</a>.</p>

			<ul class="ase-step-list unstyled">
				<li>
					<img src="<?php echo ASE_URL.'/assets/img/asf-step-1.png';?>">
					<p>Create a page in WordPress. The name doesn't matter in this application, unless you are not setting the story as the front of your site.</p>
				</li>
				<li>
					<img src="<?php echo ASE_URL.'/assets/img/asf-step-2.png';?>">
					<p>Open the Customizer panel under Appearence-->Customize, and locate the "Aesop Story Front" tab. Using the dropdown, select the story that you want to appear.</p>
				</li>
				<li>
					<img src="<?php echo ASE_URL.'/assets/img/asf-step-3.png';?>">
					<p>Now, using the next dropdown, select the page that you created in Step 1. This page will display the story you chose above.</p>
				</li>
				<li>
					<img src="<?php echo ASE_URL.'/assets/img/asf-step-4.png';?>">
					<p>While still in the Theme Customizer, and under "Static Front Page", choose the page that you created in step one. </p>
				</li>
			</ul>

			<p>Visit the front of your site, and it shoudl now display the story that you have chosen, with the page you setup set as the front page of your site.</p>

			<h3>Story Cover</h3>
			<p>The story cover feature in Jorgen is fully compatible. After you've setup your story and page, you'll change the story cover options <strong>on that same page</strong>.</p>

			<h3>Template Override (advanced)</h3>
			<p>You can modify the template being used to display the single story. Simply copy the file asf.php from the plugin, and paste it into a child theme created for Jorgen. ASF will now use your template instead of the plugins template.</p>

			<p class="ase-doc-note"><span class="label label-info">note</span>For styling purposes within a theme, the selected story front page will have a class of <code>.aesop-story-front</code> applied to the body.</p>

			<p class="ase-doc-note"><span class="label label-warning">warning</span>This add-on is currently <strong>only</strong> compatible with <a href="/library/jorgen">Jorgen</a>.</p>

			<?php echo do_shortcode('[aesop_timeline_stop num="Plugin | Story Highlights" title="Aesop Story Highlights"]');?>
			<p>Add a "cliff notes" style summary to individual stories with an easy to use admin interface.</p>

			<ul class="ase-step-list unstyled">
				<li>
					<p>Create a post within WordPress.</p>
				</li>
				<li>
					<p>Using the Story Highlights meta panel, add individual highlights with the "Add New" button.</p>
				</li>
				<li>
					<p>Highlights will be displayed in the appropriate place that the theme decides.</p>
				</li>
			</ul>

			<p>Aesop Story Highlights is compatible with all Aesop themes. All themes will display the highlights in a different fashion, so refer to each themes demo for demo of this, or reach out with a pre-sales question.</p>

			<h3>Shortcode</h3>
			<p>Optionally display highlights wherever you want them to be displayed.</p>
			<code>[aesop_story_highlights]</code>

			<h3>Filters</h3>
			
			<code>aesop_story_highlights_title</code>
			<p>Filters the name of the module. Default is Story Highlights. Heres an example on how to change the title.</p>
			<code>
				add_filter('aesop_story_highlights_title','mychangetitle');<br />
				function mychangetitle(){<br />
					&nbsp;&nbsp;return 'New title';<br />
				}
			</code>

			<h3>Override Shortcode</h3>
			<p>The main shortcode function can be overridden by copy and pasting into a child themes functions.php file.</p>
		</div><!-- end docs right-->

	</div>
</section>

<?php endwhile;endif; ?>


<?php get_footer();