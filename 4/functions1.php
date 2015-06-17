<?php

function get_page() {
	switch ($_GET["page"]):
		case 'Home': 
			$_SERVER["PHP_SELF"] = '/Home.php'; 
			break;
		case 'Contacts': 
			$_SERVER["PHP_SELF"] = '/Contacts.php'; 
			break;
		case 'About': 
			$_SERVER["PHP_SELF"] = '/About.php'; 
			break;
		case 'Portfolio': 
			$_SERVER["PHP_SELF"] = '/Portfolio.php'; 
			break;
		case 'Guestbook':	
			$_SERVER["PHP_SELF"] = '/Guestbook.php'; 
			break;
		case '': 
			$_SERVER["PHP_SELF"] = '/4_task.php'; break;
		default: 
			$_SERVER["PHP_SELF"] = '/404.php'; 
			break;
	endswitch;
}