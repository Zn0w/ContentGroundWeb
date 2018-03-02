<?php

class User
{
	public $login, $password, $name;

	public function __construct($login, $password, $name)
	{
		$this->login = $login;
		$this->password = $password;
		$this->name = $name;
	}

	public function __destruct()
	{

	}

	public function print()
	{
		echo "<h3>User: $this->login  $this->password  $this->name</h3>";
	}
};