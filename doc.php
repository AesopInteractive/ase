<?php

/*
*	 Template Name: Docs
*/



get_header();


 ?>


	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<section class="ase-docs">

		<div class="ase-content clearfix aesop-entry-content">

			<div class="ase-docs-left">
				<h3 class="ase-docs-left-title">Docs</h3>
				<div class="aesop-timeline"></div>
				<a class="btn btn-primary" href="/developers">Developer Docs <span style="position:relative;top:2px;left:3px;">&rarr;</span></a>
				<a class="btn btn-primary" href="/product-documentation">Product Docs <span style="position:relative;left:3px;">&rarr;</span></a>
			</div>
			<div class="ase-docs-right">
				<?php echo do_shortcode('[aesop_timeline_stop num="Getting Started"]');?>

				<p>Within these docs you'll find detailed descriptions as far as what each option does within each of the story components. But first, let's start by installing Aesop Story Engine and adding our first story component!</p>

				<ul class="ase-step-list unstyled">
					<li>
						<p>Head to the plugins tab within your WordPress administration area. Click on "add new". Once here, search for Aesop Story Engine, and press "search." Install Aesop Story Engine, and you're set! Hint: you can also install through FTP if you know that that is.</p>
						<a class="aesop-lb-link aesop-lightbox" rel="lightbox" href="/wp-content/themes/ase/assets/img/install-aesop.png">
							<img class="ase-step-img" src="/wp-content/themes/ase/assets/img/install-aesop.png">
						</a>
					</li>
					<li>
						<p>Go to any post, and locate the "Add Component" button. It sits right above the post editor. Once you toggle this, you'll be able to select the component, adjust any options, and insert it anywhere within your story. Galleries are managed with the "Galleries" tab within WordPress.</p>
						<a class="aesop-lb-link aesop-lightbox" rel="lightbox" href="/wp-content/themes/ase/assets/img/add-component.png">
							<img class="ase-step-img" src="/wp-content/themes/ase/assets/img/add-component.png">
						</a>
					</li>
				</ul>

				<p class="ase-doc-note"><span class="label label-primary">tip</span> <a href="/wp-content/themes/ase/assets/downloads/story-engine-xml.zip">Download</a> the playground demo content, and import under Tools-->Import to instantly create the content that the <a href="http://playground.aesopstories.com">demo</a> has.</p>

				<?php echo do_shortcode('[aesop_timeline_stop num="Gallery" title="Gallery Component"]');?>
				<p>Galleries are created and managed under the "Galleries" tab located on the left side within WordPress admin, and uses normal WordPress galleries. This means you can add and remove images, and even add captions. The gallery component creates a gallery of images, available in multiple formats, and are inserted into a story with a shortcode. Each story can have unlimited galleries.</p>

				<p>Refer to the "help" tab in WordPress admin, in the Galleries post type, for additional help on how to create the gallery.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal dl-ase">
						<dt>id</dt>
						<dd>id of the gallery</dd>
					</dl>
					<dl class="dl-horizontal dl-ase">
						<dt>a_type</dt>
						<dd>thumbnail, grid, stacked, or sequence</dd>
					</dl>
				</div>

				<p class="ase-doc-note"><span class="label label-primary">note</span> Some gallery types may not appear correctly, as themes are responsible for what the galleries look like.</p>

				<?php echo do_shortcode('[aesop_timeline_stop num="Quote" title="Quote Component"]');?>

				<p>Draws a full width quote component with large text, colored background, optional background image and parallax effect.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>width</dt>
					<dd>controls master width of the component. pass 'content' to make content width*</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>background</dt>
					<dd>color of the quote background</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>img</dt>
					<dd>background image</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>text</dt>
					<dd>color of the quote text</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>height</dt>
					<dd>height of the component. default is auto. quote will always center vertically</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>align</dt>
					<dd>quote alignment</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>size</dt>
					<dd>quote size. enter whole numbers like 1, 2, or 3.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>parallax</dt>
					<dd>enable parallax effect on the quote</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>direction</dt>
					<dd>if parallax is enabled, which direction should the quote travel from. left | right | top | bottom</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>speed</dt>
					<dd>speed of parallax item. smaller numbers are faster</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>offset</dt>
					<dd>if using parallax, the distance offset from the top. enter whole numbers like <code>500</code>.</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>quote</dt>
					<dd>the actual quote to be used.</dd>
					</dl>
				</div>

				<img src="<?php echo ASE_URL.'/assets/img/docs-quote-layout.png';?>" class="ase-img" alt="aesop quote offset how to">
				<p class="ase-doc-note"><span class="label label-primary">tip</span> The Parallax, Offset, and Direction properties are all used with the Parallax option. Refer to the illustration above for a visual guide on how the offset is applied.</p>

				<?php echo do_shortcode('[aesop_timeline_stop num="Image" title="Image Component"]');?>
				<p>Draws an image with the option to have the image open into a lightbox. Image component can also display a caption, and photo credit..</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>img</dt>
					<dd>the source path of the image</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>imgwidth</dt>
					<dd>width of the image</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>offset</dt>
					<dd>distance offset from the post - ex -150px</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>alt</dt>
					<dd>image alt</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>align</dt>
					<dd>left or right - alignment in relation to the main story text</dd></dl>
					<dl class="dl-horizontal">
						<dt>caption</dt>
						<dd>image caption</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>credit</dt>
						<dd>credit typically used as image credit</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>captionposition</dt>
						<dd>bottom or top - position of the caption in relation to the image</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>lightbox</dt>
					<dd>on or off - enables image to click open into lightbox</dd>
					</dl>
				</div>

				<?php echo do_shortcode('[aesop_timeline_stop num="Character" title="Character Component"]');?>
				<p>Draws a character with avatar, name, and bio.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>img</dt>
					<dd>path to image</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>name</dt>
					<dd>character name</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>caption</dt>
					<dd>the character caption</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>align</dt>
					<dd>left or right - in relation to the main story text</dd>
					</dl>
				</div>

				<?php echo do_shortcode('[aesop_timeline_stop num="Content" title="Content Component"]');?>

				<p>This component transforms the content that is put between the tags, and can run a background image, as well as magazine style columns. This component can also run a column of text that is offset to the left or right.</p>

				<p>To use this component, start with the opening component tag, then continue writing. Close the component tag when you’re ready to close that section..</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>height</dt>
					<dd>optional height - default is auto</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>width</dt>
					<dd>master width of the component</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>columns</dt>
					<dd>number of columns to break the content into</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>position</dt>
					<dd>left, center, or right - position of one column of text</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>innerposition</dt>
					<dd>determines floating text position - example - 20px, 20px, auto, auto (see below)</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>img</dt>
					<dd>background image</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>imgrepeat</dt>
					<dd>repeat-x, repeat-y, or no-repeat - controls the repeating of the background is using a tiled image</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>imgposition</dt>
					<dd>position of the background image, if using img repeat</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>floatermedia</dt>
					<dd>path to the floater item (could be an image)</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>floaterdirection</dt>
					<dd>up or down - when you scroll, should the floater travel up, or down (parallax)</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>floateroffset</dt>
					<dd>distance offset. enter whole integers like 400 or -400</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>color</dt>
					<dd>color of the text. helpful when using colored or image background</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>background</dt>
					<dd>color of the background</dd>
					</dl>
				</div>

				<img src="<?php echo ASE_URL.'/assets/img/content-component-innerposition.png';?>" class="ase-img aligncenter" alt="content component inner position">

				<p class="ase-doc-note"><span class="label label-primary">tip</span> Some components allow you to pass the word "content" as an option for the width. This will only work if the theme is built to support this feature. Click <a href="">here</a> if you're a developer and interested on how to make this happen.</p>

				<?php echo do_shortcode('[aesop_timeline_stop num="Chapters" title="Chapter Component"]');?>

				<p>This component provides a scroll-to point for the story. We call them “Chapters.” Each chapter point can have an image as a cover, or a video bg as a cover. Can also have a title, and subtitle.</p>

				<p>Adding this component will create a scroll-to point, and will also append a scrollnav to <code>.aesop-story-header</code>. As with all components, the markup comes unstyled.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
						<dt>label</dt>
						<dd>this is what is displayed in the chapter navigation element appended to .aesop-entry-header</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>title</dt>
						<dd>displayed as chapter title</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>subtitle</dt>
						<dd>optional chapter subtitle</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>bgtype</dt>
						<dd>img or video</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>img</dt>
						<dd>path to the image, OR video , IF using video</dd>
					</dl>
				</div>

				<p class="ase-doc-note"><span class="label label-primary">note</span> This component will not function unless your theme has provided support for it. If you're a developer and interested in building in support, click <a href="">here</a>.</p>

				<?php echo do_shortcode('[aesop_timeline_stop num="Parallax" title="Parallax Component"]');?>

				<p>Draws a fullwidth image component with parallax, lightbox, and captions. Also features a “floater” media item that can float from left to right, right to left, top to bottom, or bottom to top, over-layed on top of the image component.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>img</dt>
					<dd>path to image</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>height</dt>
					<dd>height of the parallax component</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>parallaxbg</dt>
					<dd>on or off - turn the parallax effect on or off</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>floater</dt>
					<dd>on or false - enable an additional floater item to site above the parallax image</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>floatermedia</dt>
					<dd>path to the floater item (could be an image)</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>floaterposition</dt>
					<dd>left or right - what side should the floater item be aligned to</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>floaterdirection</dt>
					<dd>up or down - when you scroll, should the floater travel up, or down (parallax)</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>floateroffset</dt>
					<dd>distance offset. enter whole integers like 400 or -400</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>caption</dt>
					<dd>optional caption</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>captionposition</dt>
					<dd>bottom-left, top-left, top-right, or bottom-right - position of the caption</dd>
					</dl><dl class="dl-horizontal">
					<dt>lightbox</dt>
					<dd>on or false - set to 'on' to enable the image to click open into a lightbox</dd>
					</dl>

				</div>

				<img src="<?php echo ASE_URL.'/assets/img/docs-quote-layout.png';?>" class="ase-img" alt="aesop quote offset how to">
				<p class="ase-doc-note"><span class="label label-primary">tip</span> The Offset, and Direction properties are all used with the Parallax option. Refer to the illustration above for a visual guide on how the offsets are applied.</p>

				<?php echo do_shortcode('[aesop_timeline_stop num="Audio" title="Audio Component"]');?>

				<p>Draws an audio player with the ability to have it automatically start once the audio player comes into view.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
						<dt>title</dt>
						<dd>optional title</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>src</dt>
						<dd>path to the mp3</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>viewstart="on"</dt>
						<dd>automatically start the audio once in view | default is <code>off</code></dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>viewend="on"</dt>
						<dd>end the audio once out of view | default is <code>off</code></dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>loop="on"</dt>
						<dd>automatically loop the audio</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>hidden="on"</dt>
						<dd>hides the audio player</dd>
					</dl>
				</div>

				<?php echo do_shortcode('[aesop_timeline_stop num="Video" title="Video Component"]');?>

				<p>Draws a fullwidth video component with optional caption.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
						<dt>width</dt>
						<dd>width of the component - pass 'content' to use as content width</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>align</dt>
						<dd>left or right - hint, choose 400px as a video width and align right</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>src</dt>
						<dd>vimeo, dailymotion, youtube, kickstarter, viddler, vine, instagram, or <code>self</code> - self is for self hosted video</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>hosted</dt>
						<dd>source of the hosted video, if using hosted video option</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>id</dt>
						<dd>id of the video from vimeo, youtube, etc. use the entire URL for kickstarter</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>loop</dt>
						<dd>for self hosted videos, should the video loop - <code>on</code> or <code>off</code> | default is <code>on</code></dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>autoplay</dt>
						<dd>for self hosted videos, should the video automatically start playing - <code>on</code> or <code>off</code> | default is <code>on</code></dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>controls</dt>
						<dd>for self hosted videos, should the controls be visible - <code>on</code> or <code>off</code> | default is <code>off</code></dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>viewstart</dt>
						<dd>for self hosted videos, automatically start the video playing once scrolled into view - <code>on</code> or <code>off</code> | default is <code>off</code></dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>viewend="on"</dt>
						<dd>end the video once out of view | default is <code>off</code></dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>caption</dt>
						<dd>optional caption for this video</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>vidwidth</dt>
						<dd>set to preserve aspect ratio of the video</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>vidheight</dt>
						<dd>set to preserve aspect ratio of the video</dd>
					</dl>
				</div>

				<p class="ase-doc-note"><span class="label label-primary">note</span> vidwidth and vidheight can be obtained by getting the width and height values from your embed. Because all videos are different, these will be different based on your video. These hidden attributes are also not located in the automatic generator.</p>

				<?php echo do_shortcode('[aesop_timeline_stop num="Map" title="Map Component"]');?>

				<p>Draws a fullwidth map component with custom location markers.Only one map is allowed per story at this time.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>height</dt>
					<dd>height of the map component</dd>
					</dl>
				</div>

				<h3>Map Markers</h3>
				<p>The maps component is pretty versatile when it comes to adding markers, and even custom map tiles (ASE 1.0.3). The location markers are added with post meta inside the story screen, to the right of the story. Locations are entered with Latitude and Longitude coordinates.</p>

				<h3>Map Tiles (1.0.3)</h3>
				<p>Maps utilize Open Maps. These maps work with "map tiles" that come together like a puzzle to provide the image of the roads, lakes, etc. We provide a free map tile account, however, it's important to know that this is limited to 10k views a month.</p>
				<p>For this reason, it's <strong>highly</strong> recommended to create your own free account with <a href="http://mapbox.com">Mapbox</a>, and provide your own map id. It's super simple, and here's how you do it</p>

				<ul class="ase-step-list unstyled">
					<li>
						<p>Head to <a href="http://mapbox.com">http://mapbox.com</a> and create a free account. Should you exceed their 10k map tile view limit, you can upgrade for a nominal fee.</p>
						<a class="aesop-lb-link aesop-lightbox" rel="lightbox" href="/wp-content/themes/ase/assets/img/map-step-1.png">
							<img class="ase-step-img" src="/wp-content/themes/ase/assets/img/map-step-1.png">
						</a>
					</li>
					<li>
						<p>Once you have created an account, locate the default map that has been created for you, and click the clipboard icon to copy to your clipboard.</p>
						<a class="aesop-lb-link aesop-lightbox" rel="lightbox" href="/wp-content/themes/ase/assets/img/map-step-2.png">
							<img class="ase-step-img" src="/wp-content/themes/ase/assets/img/map-step-2.png">
						</a>
					</li>
					<li>
						<p>Now go to your site, and head to Appearence-->Customize. Paste the ID under Aesop Story Engine tab in the Mapbox Map ID location. Your map should now be using your tiles. </p>
						<a class="aesop-lb-link aesop-lightbox" rel="lightbox" href="/wp-content/themes/ase/assets/img/map-step-3.png">
							<img class="ase-step-img" src="/wp-content/themes/ase/assets/img/map-step-3.png">
						</a>
					</li>
				</ul>

				<p class="ase-doc-note"><span class="label label-primary">note</span> New map features such as custom tiles are available in ASE 1.0.3 and up.</p>

				<?php echo do_shortcode('[aesop_timeline_stop num="Timeline" title="Timeline Component"]');?>

				<p>Draws a scroll-to type navigation that we call a ‘Timeline.’ It acts similar to the chapter component, in that it creates a scroll-to point. Ideal labels include Months, or years. Each component creates a scroll-to point in the form of an h2 tag.</p>

				<p>This component can be used in pages as well, to create a one-page scrolling website.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
						<dt>num</dt>
						<dd>any word or number to be displayed in navigation</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>title</dt>
						<dd>text to be displayed for page heading</dd>
					</dl>
				</div>


				<?php echo do_shortcode('[aesop_timeline_stop num="Document" title="Document Component"]');?>

				<p>Draws a small Document heading, and when clicked will slide down to reveal the document/image. Ideally used to reference documents such as a PDF.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
					<dt>type</dt>
					<dd>pdf or image - use an image or display an embedded PDF</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>src</dt>
					<dd>path to image or document</dd>
					</dl>
					<dl class="dl-horizontal">
					<dt>caption</dt>
					<dd>caption for the document</dd>
					</dl>

				</div>


				<?php echo do_shortcode('[aesop_timeline_stop num="Collections" title="Collections Component"]');?>

				<p>This component creates a collection of stories. For example, if you placed stories within a collection called Art, you could display those in a grid form on, say, the home page of your story site.</p>

				<div class="ase-doc-atts">
					<dl class="dl-horizontal">
						<dt>collection</dt>
						<dd>id of the collection</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>title</dt>
						<dd>display an optional title for this collection</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>columns</dt>
						<dd>how many columns of results shoudl there be - default is 2</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>limit</dt>
						<dd>limit the number of posts shown - default is -1, or all posts</dd>
					</dl>
					<dl class="dl-horizontal">
						<dt>splash</dt>
						<dd>enable splash mode, which pulls in the specific categories on your site, that in turn link to stories in that category</dd>
					</dl>
				</div>

			</div><!-- end docs right-->

		</div>
	</section>

	<?php endwhile;endif; ?>

<?php get_footer();