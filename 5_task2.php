<?php

class User {
	private $username = 'Guest';
	
	private $password;
	
	private $email;
	
	public function getUsername()
	{
		return $this->username;
	}

	public function setUsername($x)
	{
		$this->username = $x;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($x)
	{
		$this->password = $x;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function setEmail($email)
	{
		$this->email = $email;
	}	
	
	public function Article()
	{
		$this->getUsername();
		// static::getUsername();
	}	
}

class Article {
	private $articlename = 'BestArticleEver';
	
	private $content;
	
	public $authorname;
	
	public function getArticlename()
	{
		return $this->articlename;
	}

	public function setArticlename($x)
	{
		$this->articlename = $x;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setContent($x)
	{
		$this->content = $x;
	}
	
	public function getAuthorname()
	{
		return $this->authorname;
	}
	
	public function setAuthorname($x)
	{
		$this->authorname = $x;
	}	
}

$person = new User();
$person->setUsername('Vovan');
$person->setPassword('12345');
echo $person->getUsername() . '<br>';
$a = $person->getUsername();

$article = new Article();
$article->setArticlename('Classes and objects');
$article->setAuthorname($a);
echo $article->getArticlename() . '<br>';
echo $article->getAuthorname() . '<br>';