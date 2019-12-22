<?php
include_once('../../permissionManager.php');
/** Objeto rank, acumula el puntaje en cada categoría de un jugador (idenficado por email)
*/
class Rank
{
  private $score;
  private $email;

/* Requiere el usuario al que referencia
*/
  function __construct($user){
    $this->email=$user->getEmail();
    foreach (PermissionManager::getInstance()->getCategories() as $category) {
      $this->ranking[$category]=0;
    }
  }

/* Retorna el puntaje. Si no se especifica categoría, retorna el puntaje total
*/
  public function getScore($category = null){
    if ($category==null){
      $acumulador=0;
      foreach ($this->score as $value) {
        $acumulador=$acumulador+$value;
      }
      return $acumulador;
    }else{
      return $this->score[$category];
    }
  }

/* Retorna el email del jugador al que referencia
*/
  public function getEmail(){
      return $this->email;
  }


  /* Salva el puntaje en cierta categoría
  */
  public function setScore($score,$category){
      $this->score[$category] = $this->score[$category] + $score;
  }


  public function setEmail($email){
      $this->email = $email; 
      return $this;
  }

}

 ?>
