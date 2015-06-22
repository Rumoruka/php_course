<?php


$post = $conn->fetchAssoc("SELECT * FROM posts WHERE id = :id", 
	array('id' => $request->query->getInt('id'),//(int) $_GET['id'],
		));
// $stmt->bindValue("id", (int) $_GET['id']); 
// $stmt->execute();

?>

<a href="<?= $request->server->get('SCRIPT_NAME') ?>">Back to blogE</a>
<a href="<?= $request->server->get('SCRIPT_NAME') ?>/admin/post?id=<?=$post['id']?>">Edit</a>
<h1>BlogE</h1>


<h2><?= $post['heading'] ?></h2>
<p><?= $post['content'] ?></p>
