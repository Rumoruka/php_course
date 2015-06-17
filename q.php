<html>
	<head>
		<title>menu</title>
		<style type="text/css">
		span.one {background-color:#4682B4;}
		span.two {background-color:#87CEFA;}
		</style>	
	</head>	
	<body>
		<?php 
		$arr = array(
			'arr1',
			'arr2',
			'arr3',
			'arr4',
		);
		$c=count($arr);
		echo "<ul style=\"list-style-type:none\">";
		for ($i=0; $i<$c; $i++){
			if ($i%2 == 0){
				echo "<li>" . "<span class=\"one\"><a href=\"\">$arr[$i]</a></span>" . "</li>";}
			else
				echo "<li>" . "<span class=\"two\"><a href=\"\">$arr[$i]</a></span>" . "</li>";
			}	
		echo '</ul>';
		?>
	</body>
</html>