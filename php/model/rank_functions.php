<?php
include_once('./php/dbm/dbmRank.php');
include_once('./php/entities/rank.php');
include_once('./php/dbm/dbmUsers.php');
include_once('./php/entities/user.php');
/*  Singleton class
* support for ranking view
*/
class RankTools {

  private $instance=null;
  private $DBMRank;

  private function __construct(){
    $DBMRank=DBMRank::getInstance();
  }

  public function getInstance(){
    if (!self::$instance instanceof RankTools){
      self::$instance=new self();}
    return self::$instance;
  }

  public function showRankAll($category=null){
    $users=DBMUsers::getInstance()->getUsers();
    $usersOrder=$this->orderUsers($users,$category);
    arsort($usersOrder);
    foreach ($usersOrder as $key => $value ) {
      $i = 0;
      while ($users[$i]->getUsername()!=$key){
        $i++;
      }
      addRow($users[$i],$category);
    }
  }

  public function addRow($user,$category=null){
    $rank=$DBMRank->getRankByEmail($user->getEmail());
    echo'
      <tr>
        <th scope="row">1</th>';
    echo "
        <td>$rank->getScore($category)</td>
        <td>$user->getUsername()</td>
        <td>$user->getAge()</td>
      </tr>";
  }

/* Retorna un arreglo de [Username]=Score
 */
 public function orderUsers($users,$category=null){
   $array=[];
   foreach ($users as $user) {
     $array[$user->getUsername()]=$DBMRank->getRankByEmail($user->getEmail())->getScore($category);
   }
   return $array;
 }
}
 ?>
