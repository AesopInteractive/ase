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

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et turpis est. Cras id quam non neque elementum eleifend et sed metus. Cras vestibulum, turpis id semper aliquam, mi ligula cursus purus, ac mattis neque justo eget leo. Nunc suscipit scelerisque ligula, eu faucibus ipsum euismod ut. Duis et justo varius, iaculis libero vel, auctor tellus. Phasellus hendrerit lectus enim, nec molestie nulla scelerisque at. Etiam tempor tempus magna rutrum suscipit. Nunc venenatis euismod risus, nec pellentesque nisi venenatis rhoncus. Nulla facilisi.</p>

				<p>Vivamus sit amet tortor vitae orci iaculis condimentum non quis magna. Nunc vehicula venenatis condimentum. Cras ac faucibus mauris, eget condimentum elit. In hac habitasse platea dictumst. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis sit amet leo gravida, ultrices dui at, vulputate nibh. Nulla et turpis lectus. Phasellus pulvinar sed lacus quis sollicitudin. Proin quis posuere tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ullamcorper venenatis volutpat. In tincidunt dui augue, vel pretium odio pellentesque at. Proin nec leo viverra, viverra velit id, posuere massa. Pellentesque tellus nunc, iaculis ac tellus sit amet, scelerisque dapibus orci.</p>

				<p class="ase-doc-note"><span class="label label-primary">tip</span> whatevers</p>

				<p>Curabitur sodales augue at leo adipiscing posuere. Donec feugiat arcu at quam malesuada, et lacinia enim feugiat. Aenean urna felis, commodo laoreet mi in, laoreet egestas urna. Integer gravida lacinia nulla, in eleifend velit. Pellentesque sed turpis vel elit auctor tempor. Duis sodales convallis convallis. In varius condimentum quam ac aliquet. Vivamus luctus tellus sed commodo tincidunt. Aliquam tincidunt nisl malesuada neque placerat lobortis. Pellentesque tortor lorem, auctor in purus quis, elementum consectetur enim. Pellentesque pulvinar ipsum sed dictum fringilla. Cras eu nibh a libero aliquet tempus mattis in nunc. Nulla nec commodo neque.</p>

				<p>Vestibulum viverra massa sem, nec varius arcu semper ut. Quisque tempor iaculis est, vel congue orci ornare eu. Etiam vitae sodales purus, eu varius felis. Integer auctor arcu nisl, at consectetur urna dapibus non. Nunc velit ipsum, faucibus in metus eu, vulputate commodo ligula. Fusce sed lacus sed magna posuere aliquet. Ut malesuada laoreet mattis. Curabitur pretium adipiscing sem id placerat. Maecenas accumsan quis magna a viverra.</p>

				<p>Morbi non dictum nunc. Pellentesque pharetra at arcu quis iaculis. Phasellus tincidunt convallis aliquam. Vivamus a quam metus. Suspendisse egestas quis ligula in ornare. Ut nec molestie quam. Nunc odio elit, gravida non ultricies sit amet, ullamcorper quis sem. Etiam a lacinia nisl, non dictum magna. Nullam dolor sapien, fermentum sit amet magna tristique, fermentum volutpat massa. Nulla facilisi. Aenean erat lorem, egestas eget nisl luctus, volutpat aliquet quam. Proin sit amet lacus vitae lorem facilisis mattis eget ut arcu. Donec elementum auctor dignissim.</p>

				<hr />
				<?php echo do_shortcode('[aesop_timeline_stop num="Quote Component"]');?>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et turpis est. Cras id quam non neque elementum eleifend et sed metus. Cras vestibulum, turpis id semper aliquam, mi ligula cursus purus, ac mattis neque justo eget leo. Nunc suscipit scelerisque ligula, eu faucibus ipsum euismod ut. Duis et justo varius, iaculis libero vel, auctor tellus. Phasellus hendrerit lectus enim, nec molestie nulla scelerisque at. Etiam tempor tempus magna rutrum suscipit. Nunc venenatis euismod risus, nec pellentesque nisi venenatis rhoncus. Nulla facilisi.</p>



			</div>

		</div>
	</section>

	<?php endwhile;endif; ?>


</main>


<?php get_footer();




