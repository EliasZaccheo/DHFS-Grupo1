<?php
include_once('../../permissionManager.php');
/** */
class Rank
{
  private $ranking;
  private $email;

  function __construct($user){
    $this->email=$user->getEmail();

    foreach (PermissionManager::getInstance()->getCategories() as $category) {
      $this->ranking[$category]=0;
    }
  }

  public function getRanking($category = 'All'){
    if ($category=='All'){
      return $this->ranking;
    }else{
      return $this->ranking[$category];
    }
  }

  public function getEmail(){
      return $this->email;
  }


}

 ?>
