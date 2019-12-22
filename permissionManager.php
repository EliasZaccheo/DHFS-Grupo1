<?php

/* Singleton class
*/
class PermissionManager {

private CONST VISITOR=0;
private CONST USER=1;
private CONST SUPERUSER=2;
private static $instance=null;
private $categories =[
  "Ciencias",
  "Cultura",
  "Entretenimiento",
  "Gastronomía",
  "Deportes",
  "Historia",
  "Arte",
  "Farandula"
];


private function __construc() { }

public static function getInstance()
  {
    if (!self::$instance instanceof PermissionManager)
      self::$instance=new self();
    return self::$instance;
}


static public function visitorPermission(){
  if (($_SESSION['sesion']= self::VISITOR)||userPermission()||superuserPermission()) {
    return true;
  }
  return false;
}

static public function userPermission(){
  if (($_SESSION['sesion']= self::USER)||superuserPermission()) {
    return true;
  }
  return false;
}

static public function superuserPermission(){
  if ($_SESSION['sesion']= self::SUPERUSER) {
    return true;
  }
  return false;
}

static public function getVisitorValue(){
  return self::VISITOR;
}

static public function getUserValue(){
  return self::USER;
}

static public function getSuperuserValue(){
  return self::SUPERUSER;
}


public function getCategories(){
    return $this->categories;
}

}

?>
