<a href="<?= $request->server->get('SCRIPT_NAME') ?>">Back to blogE</a><br /><br />
<?php 

$delete = $conn->fetchAssoc("SELECT * FROM posts WHERE id = :id", 
	array('id' => $request->query->getInt('id'),
	));
	$result = mysql_query("DELETE FROM posts WHERE id = :id")
	or die("Invalid query: " . mysql_error());
	echo $result;
?>	


