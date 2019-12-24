<?php
include_once('./php/dbm/dbmQuestions.php');
/** Objeto question
*/
class Question
{
  private $id;
  private $category;
  private $level;
  private $question;
  private $answers;
  private $answer_right;

/* Crea un nuevo objeto Question. Requiere
* Categoría
* Nivel
* Pregunta
* 4 respuestas
* Un entero entre 0 y 3
*/
  public function __construct($category,$level,$question,$answer_1,$answer_2,$answer_3,$answer_4,$answer_right){
    $this->id=DBMQuestions::getInstance()->getElemensCount();
    $this->category=$category;
    $this->level=$level;
    $this->question=$question;
    $this->answers[]=$answer_1;
    $this->answers[]=$answer_2;
    $this->answers[]=$answer_3;
    $this->answers[]=$answer_4;
    $this->answer_right=$answer_right;
  }

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id = $id;
    return $this;
  }

  public function getCategory(){
    return $this->category;
  }

  public function setCategory($category){
    $this->category = $category;
    return $this;
  }

  public function getLevel(){
    return $this->level;
  }

  public function setLevel($level){
    $this->level = $level;
    return $this;
  }

  public function getQuestion(){
    return $this->question;
  }

  public function setQuestion($question){
    $this->question = $question;
    return $this;
  }

  public function getAnswers(){
    return $this->answers;
  }

/* Requiere un arreglo de 4 respuestas
*/
  public function setAnswers($answers){
    $this->answers = $answers;
    return $this;
  }

  /* Modifica una de las respuestas
  * $pos : [0,3]
  */
    public function setAnswer($answer,$pos){
      $this->answers[$pos] = $answer;
      return $this;
    }

  public function getAnswerRight(){
    return $this->answer_right;
  }

/* El dato pasado por parámetro debe ser un entero entre 0 y 3
*/
  public function setAnswerRight($answer_right){
    $this->answer_right = $answer_right;
    return $this;
  }

}

 ?>
