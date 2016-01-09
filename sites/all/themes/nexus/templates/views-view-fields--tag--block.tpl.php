<?php 
	$tag = $fields['tid']->content;
	$name = $fields['name']->content;
?> 	

<h1>Other <?php print $name; ?> modules</h1>
<?php print views_embed_view('other_videos','block',$tag); ?>