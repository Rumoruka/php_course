<?php


$post = $conn->fetchAssoc("SELECT * FROM posts WHERE id = :id", 
	array('id' => (int) $_GET['id'],
		));
// $stmt->bindValue("id", (int) $_GET['id']); 
// $stmt->execute();

?>

<a href="<?= $_SERVER['PHP_SELF'] ?>">Back to blogE</a>
<h1>BlogE</h1>


<h2><?= $post['heading'] ?></h2>
<p><?= $post['content'] ?></p>

