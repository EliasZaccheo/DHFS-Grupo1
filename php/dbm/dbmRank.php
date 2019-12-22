<?php
include_once('dbm.php');
include_once('dbmUsers.php');

/*  Singleton class
* Opera con el Alta, Baja y Modificación de objetos 'Rank'.
* Almacena en formato objeto.
*/
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

  /* Retorna la posición del objeto rank asociado al email pasado por parámetro
  * Retorna null si no lo encuentra
  */
  private function seekRankByEmail($email){
    $source=parent::getSource();
    foreach ($source as $key => $value) {
      if ($value->getEmail()==$email){
        return $key;
      }
    }
    return null;
  }

  /* Retorna el objeto rank asociado al email pasado por parámetro
  * Retorna null si no lo encuentra
  */
  private function getRankByEmail($email){
    $source=parent::getSource();
    foreach ($source as $key => $value) {
      if ($value->getEmail()==$email){
        return $value;
      }
    }
    return null;
  }

  /*Elimina del archivo el objeto rank asociado al email pasado por parámetro
  * Retorna null si no lo encuentra
  */
  private function deleteRankByEmail($email){
    $source=parent::getSource();
    foreach ($source as $key => $value) {
      if ($value->getEmail()==$email){

      }
    }
    return null;
  }

  /* Salva en memoria secundaria el ranking de un jugador (esté o no registrado antes)
  */
  public function saveRanking($rank){
    $elemento=seekRankByEmail($rank->getEmail());
    $source=parent::getSource();
    if ($elemento!==null){
      $source[$elemento]=$rank;
    }else{
      $source[]=$rank;
    }
    parent::setSource($source);
  }

  /* Salva en memoria secundaria el puntaje de un jugador en una categoría específica
  */
  public function saveScore($score,$category,$user){
    $elemento=seekRankByEmail($rank->getEmail());
    $source=parent::getSource();
    if ($elemento!==null){
      $source[$elemento]->setScore($score,$category);
    }else{
      $source[] = new Rank(); // Añade un nuevo elemento rank
      $source[count($source)-1]->setScore($score,$category); //Aumenta el puntaje de la categoría correspondiente
    }
    parent::setSource($source);
  }
}

?>
