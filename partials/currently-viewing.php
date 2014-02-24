<?php

$category = $wp_query->query_vars['category_name'];

?>

<div class="ase-currently-viewing">
	Archives for <span><?php echo $category;?></span>
</div>