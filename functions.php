<?php

function greeting($name = 'Guest', $surname = '')
{
	
	$greeting = 'Hello, ' . $name . ' ' . $surname . '!';

	return $greeting;
}