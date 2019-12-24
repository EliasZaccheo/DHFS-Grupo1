<?php
include_once('./php/dbm/dbm.php');
include_once('./php/dbm/dbmUsers.php');
include_once('./php/entities/question.php');

/*  Singleton class
* Opera con el Alta, Baja y Modificación de objetos 'Rank'.
* Almacena en formato objeto.
*/
class DBMQuestions extends DataBaseManager{
  private const SOURCE='./json/questionsv1.json';
  private static $instance=null;

  private function __construct(){
    parent::__construct(self::SOURCE);
  }

  public function getInstance(){
    if (!self::$instance instanceof DBMQuestions){
      self::$instance=new self();}
    return self::$instance;
  }

  // Busca y retorna un objeto Question por su identificador
  public function getQuestionById($questionId){
    $questions=$this->getSourceDecode();
    if (count($questions)>$questionId){
      return $questions[$questionId];
    }
    return null;
  }

  // Busca y retorna un arreglo de Question de la categoria enviada por parámetro
  public function getQuestionsByCategory($category){
    $questions=$this->getSourceDecode();
    if (count($questions)>=$questionId){
      $ret=[];
      foreach ($questions as $question) {
        if ($question->getCategory()==$category){
          $ret[]=$question;
        }
      }
      return $ret;
    }
    return null;
  }

  // Sobre escribe un tag (elemento) de una pregunta en particular
  public function partialyOverwrite($questionId,$tag,$content) {
    $question=$this->getQuestionById($questionId);
    if ($question===null){
      return false;
    }else{
      switch ($tag) {
        case 'category':
          $question->setQuestion($content);
          break;
        case 'level':
          $question->setLevel($content);
          break;
        case 'question':
          $question->setQuestion($content);
          break;
        case 'answer_1':
          $question->setAnswer($content,0);
          break;
        case 'answer_2':
          $question->setAnswer($content,1);
          break;
        case 'answer_3':
          $question->setAnswer($content,2);
          break;
        case 'answer_4':
          $question->setAnswer($content,3);
          break;
        case 'answer_right':
          $question->setAnswerRight($content);
          break;
        default:
          return false;
          break;
      }
      $this->totalOverwrite($questionId,$question);
      return true;
    }
  }

  // Sobre escribe una pregunta en particular
  public function totalOverwrite($questionId, $question){
    if ($this->getQuestionById($questionId)===null){
      return false;
    }else{
      $questions=$this->getSourceDecode();
      $questions[$questionId]=$question;
      $this->setSourceEncode($questions);
      return true;
    }
  }

  /* Añade un objeto Question a la memoria secundaria
  * Retorna el identificador designado de esta pregunta
  */
  public function addQuestion($question){
    if ($question){
      $questions=$this->getSourceDecode();
      $questions[]=$question;
      $this->setSourceEncode($questions);
      return count($questions)-1;
    }else{
      return 0;
    }
  }


}
?>
