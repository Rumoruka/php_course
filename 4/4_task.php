<?php 
$arr = array(
	'Home',
	'Contacts',
	'About',
	'Portfolio',
	'Guestbook',
);

$count = count($arr);
require_once('functions1.php');
get_page();
?>
<html>
	<head>
		<title>menu</title>
		<style type="text/css">
		span.one {background-color:#4682B4;}
		span.two {background-color:#87CEFA;}
		ul a {color:yellow; text-decoration:none;}
		ul a:hover {text-decoration:underline;}
		ul {list-style-type:none; font-size:30px;}
		</style>	
	</head>	
	<body>
		<ul>
			<?php for ($i = 0; $i < $count; $i++) : ?>
				<?php
				if ($i % 2 == 0){
					$class = "one";
				} else {
					$class = "two";
				}
				?>
				<li>
					<span class="<?= $class ?>">
					<!-- В посилання записуємо ім'я теперішнього файлу+
					конструкцію для того, щоб в GET отримати значення
					page, яке потім використовуєтсья для переадресації'-->
						<a href="4_task.php?page=<?= $arr[$i] ?>"><?= $arr[$i] ?></a>
					</span>
				</li>
			<?php endfor; ?>
		</ul>
	</body>
</html>
<?php 
//print_r($_SERVER);
get_page();