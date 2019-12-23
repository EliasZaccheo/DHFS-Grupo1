<?php
include_once('./php/dbm/dbm.php');

/*  Singleton class */
class DBMUsers extends DataBaseManager{
  private const SOURCE='../../json/users.json';
  private const DEFAULT_IMG= 'img/usersProfiles/unknown.png';
  private $instance=null;

  private function __construct(){
    parent::__construct($source);
  }

  public function getInstance(){
    if (!self::$instance instanceof DBMUsers)
      self::$instance=new self();
    return self::$instance;
  }

  // Añade un usuario con los campos username,email,password,user-birth y profile-image (opcional la ultima)
  public function addUser($user){
    if ($user){
      $users=getUsersDecode();
      $users[]=[
        "username" => $user["username"],
        "email" => $user["email"],
        "password" => $user["password"],
        "user-birth" => $user["user-birth"],
        "profile-image" => $user["profile-image"]
      ];
      global $file;
      file_put_contents($file,json_encode($users));
      return true;
    }else{
      return false;
    }
  }



}

?>
