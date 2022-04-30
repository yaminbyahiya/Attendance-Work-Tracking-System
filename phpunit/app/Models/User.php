<?php

namespace App\Models;

class User
{
	public $email;
    public $password;
	public $database_email="admin@gmail.com";
	public $database_password="Password@123";
	public $validation = False;

    public function setDetails($email,$password){
		$this->email = $email;
		$this->password = $password;
	}
	public function Validate(){
		if($this->email == $this->database_email && $this->password == $this->database_password){
			$this->validation = True;
		}
		return $this->validation;
	}
}