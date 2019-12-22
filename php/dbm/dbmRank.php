<?php
include_once('dbm.php');

/*  Singleton class */
class DBMRank extends DataBaseManager{
  private const SOURCE='./json/ranking.json';
  private $instance=null;

  private function __construct(){
    parent::__construct($source);
  }

  public function getInstance(){
    if (!self::$instance instanceof DBMUsers)
      self::$instance=new self();
    return self::$instance;
  }

  /* Añade un usuario con los campos username,email,password,user-birth y profile-image (opcional la ultima)
  */
  private function addUser($rank){

  }


  public function saveRanking($rank){
    if (!seekRank($rank->getEmail())){

    }else{
      //Lanzar excepción
    }    
  }

}

?>
