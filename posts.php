<?php

$posts = $conn->fetchAll("SELECT * FROM posts");

?>

<h1>BlogE</h1>

<?php foreach ($posts as $post) : ?>
	<div>
		<h2><a href="<?= $request->server->get('PHP_SELF') ?>?id=<?= $post['id'] ?>"><?= $post['heading'] ?></a></h2>
	</div>
		<p><?= $post['intro'] ?></p>
	<div>
		<a href="<?= $request->server->get('PHP_SELF') ?>?id=<?= $post['id'] ?>">read more...</a>
	</div>
<?php endforeach ?>