<div class="sidebar" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
	<ul class="unstyled sidebar-widgets">
		<?php

			if(is_active_sidebar('bbpress') ) {
				dynamic_sidebar('bbpress');
			}

		?>
	</ul>
</div>

