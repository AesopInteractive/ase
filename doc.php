<?php 

/*
*	 Template Name: Docs
*/



get_header();


 ?>

<main id="main" class="clearfix">

	

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<section class="ase-docs">

		<div class="ase-content clearfix aesop-entry-content">

			<div class="ase-docs-left">
				<h2 class="ase-docs-left-title">Docs</h2>
				<div class="aesop-timeline"></div>
				<a class="btn btn-red" href="/developers">Developer? Click here.</a>
			</div>
			<div class="ase-docs-right">
				<?php echo do_shortcode('[aesop_timeline_stop num="Installing Aesop"]');?>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et turpis est. Cras id quam non neque elementum eleifend et sed metus. Cras vestibulum, turpis id semper aliquam, mi ligula cursus purus, ac mattis neque justo eget leo. Nunc suscipit scelerisque ligula, eu faucibus ipsum euismod ut.</p>

				<ul class="ase-step-list unstyled">
					<li>
						<p>Vivamus luctus tellus sed commodo tincidunt. Aliquam tincidunt nisl malesuada neque placerat lobortis. Pellentesque tortor lorem, auctor in purus quis, elementum consectetur enim.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
					<li>
						<p>Vivamus luctus tellus sed commodo tincidunt. Aliquam tincidunt nisl malesuada neque placerat lobortis. Pellentesque tortor lorem, auctor in purus quis, elementum consectetur enim.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
					<li>
						<p>Vivamus luctus tellus sed commodo tincidunt. Aliquam tincidunt nisl malesuada neque placerat lobortis. Pellentesque tortor lorem, auctor in purus quis, elementum consectetur enim.</p>
						<img class="ase-step-img" src="http://placehold.it/300x150">
					</li>
				</ul>

				<hr />
				<?php echo do_shortcode('[aesop_timeline_stop num="Gallery Component"]');?>
				<p>This component creates a gallery of images. Several different gallery types are available within the same component. Galleries are created and managed under the Galleries post type, and are inserted into a story with a shortcode. Each story can have unlimited galleries.</p>

				<p>WordPress galleries are used for this component. Refer to the "help" tab in WordPress admin, in the Galleries post type, for instructions on how to create the gallery.</p>

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

				<p>Curabitur sodales augue at leo adipiscing posuere. Donec feugiat arcu at quam malesuada, et lacinia enim feugiat. Aenean urna felis, commodo laoreet mi in, laoreet egestas urna. Integer gravida lacinia nulla, in eleifend velit. Pellentesque sed turpis vel elit auctor tempor. Duis sodales convallis convallis.</p>

				<p class="ase-doc-note"><span class="label label-primary">tip</span> whatevers</p>

				<hr />
				<?php echo do_shortcode('[aesop_timeline_stop num="Quote Component"]');?>

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
				</div>


			</div>

		</div>
	</section>

	<?php endwhile;endif; ?>


</main>


<?php get_footer();




