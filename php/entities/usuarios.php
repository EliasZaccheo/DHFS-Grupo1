<?php
//include_once("../model/register_functions.php");
class usuarios{

protected $userName;
protected $email;	
protected $estado;	
protected $avatar;	
protected $password;
protected $userBirth;	
public static $id;

public function __Construct($name,$email,$estado,$password,$userBirth){
self::setUserName($name);
self::setEmail($email);
self::setEstado($estado);
self::setPassword($password);
self::setUserBirth($userBirth);
}

public function setUserName($par){$this->userName=$par;}
public function setEmail($par){$this->email=$par;}
public function setEstado($par){$this->estado=$par;}
public function setAvatar($par){$this->avatar=$par;}
public function setPassword($par){$this->password=$par;}
public function setId($par){$this->id=$par;}
public function setUserBirth($par){$this->userBirth=$par;}


public function getUserName(){return $this->userName;}
public function getEmail(){return $this->email;}
public function getEstado(){return $this->estado;}
public function getAvatar(){return $this->avatar;}
public function getPassword(){return $this->password;}
public function getId(){return $this->id;}
public function getUserBirth(){return $this->userBirth;}
}







 ?>