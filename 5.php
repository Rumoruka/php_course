<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Profile.php';
require_once __DIR__ . '/classes/Custumer.php';

$user1 = new User();
$user2 = new User();
$user3 = new User();

// $profile = new Profile();

// $user->setProfile($profile);

// if ($p = $user->getProfile()){
// 	echo $p->getPhone();
// }

// $custumer = new Custumer();
// echo $custumer;
//echo $user1::getCount();

echo User::getCount();

