<?php

class printUser
{
	private $hook;
	public function printInfo()
	{
		eval($this->hook);
	}
}

class User
{
   function __wakeup()
   {
   	  $this->user->printInfo();
   }
}

$user_data = unserialize($_COOKIE['data']);

?>

