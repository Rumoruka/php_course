<?php
global $posts;
?>
<h1>BlogE</h1>

<?php foreach ($posts as $post) : ?>
	<div>
		<h2><a href="""><?= $post['heading'] ?></a></h2>
	</div>
		<p><?= $post['intro'] ?></p>
	<div>
		<a href="">read more...</a>
	</div>
<?php endforeach ?>