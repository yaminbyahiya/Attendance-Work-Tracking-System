<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

	public $user;

	public function testValidation()
	{

		$this->user = new \App\Models\User;
		$this->user->setDetails("admin@gmail.com","Password@123");
		$this->assertEquals($this->user->validate(),True);
	}

}