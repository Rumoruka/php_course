<?php

class User
{
	private static $count = 0;

	private $username = 'Guest';

	private $password = 'qwerty';

	protected $email = 'ax_tu@mail.com';

	private $profile;

	public static function getCount()
	{
		return self::$count;
	}

	public function __construct()
	{
		self::$count++;
	}

	public function __toString()
	{
		return $this->username;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		if(strlen($password) < 8){
			die('Password < 8 simbols, but it should be =8 or more');
		}
		$this->password = $password;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getProfile()
	{
		return $this->profile;
	}

	public function setProfile(Profile $profile)
	{
		$this->profile = $profile;
	}	
}