<?php

class User
{
	public $login, $name;
	public $rating;
	// List of user's discussions
	// List of user's favorited discussions
	// List of user's entered communities

	public function __construct($login, $name)
	{
		$this->login = $login;
		$this->name = $name;
	}

	public function __destruct()
	{

	}
};