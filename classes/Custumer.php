<?php

class Custumer extends User 
{
	private $wallet = 10;

	public function __toString()
	{
		// return (string)$this->wallet;
		return parent::__toString() . ' - ' . $this->wallet;
	}	

	public function getEmail()
	{
		return $this->email;
	}	

	public function getWallet()
	{
		return $this->wallet;
	}

	public function setWallet($wallet)
	{
		$this->wallet = $wallet;
	}		 
}