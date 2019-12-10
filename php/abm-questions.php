<?php
$file = "./json/questions.json";
$categories =[
  "Ciencias",
  "Cultura",
  "Entretenimiento",
  "Gastronomía",
  "Deportes",
  "Historia",
  "Arte",
  "Farandula"
];

// Añade una pregunta con los campos 'question', 'answer_n' (n:[1..4]) y 'answer_right'.
// Retorna el identificador designado de esta pregunta
function addQuestion($question){
  if ($question){
    $questions=getQuestionsDecode();
    $questions[]=[
      "id" => count($questions),
      "category" => $question["category"],
      "level" => $question["level"],
      "question" => $question["question"],
      "answer_1" => $question["answer_1"],
      "answer_2" => $question["answer_2"],
      "answer_3" => $question["answer_3"],
      "answer_4" => $question["answer_4"],
      "answer_right" => $question["answer_right"]
    ];
    writeQuestions($questions);
    return count($questions)-1;
  }else{
    return 0;
  }
}

// Retorna un array con las preguntas almacenadas
function getQuestionsDecode(){
  global $file;
  $fileOpen = file_get_contents($file);
  if ($fileOpen){
    $questions = json_decode($fileOpen,true);}
  else{
    $questions=[];
  }
  return $questions;
}

// Retorna la cantidad de preguntas almacenadas
function getQuestionsCount(){
  return count(getQuestionsDecode());
}

// Busca y retorna una pregunta por su identificador
function getQuestionById($questionId){
  $questions=getQuestionsDecode();
  if (count($questions)>=$questionId){
    return $questions[$questionId];
  }
  return null;
}

// Busca y retorna una pregunta por su identificador
function getQuestionsByCategory($category){
  $questions=getQuestionsDecode();
  if (count($questions)>=$questionId){
    $ret=[];
    foreach ($questions as $question) {
      if ($question["category"]==$category){
        $ret[]=$question;
      }
    }
    return $ret;
  }
  return null;
}

// Sobre escribe un tag (elemento) de una pregunta en particular
function partialyOverwrite($questionId,$tag,$content) {
  $question=getQuestionById($questionId);
  if ($question===null){
    return false;
  }else{
    $question[$tag] = $content;
    totalOverwrite($questionId,$question);
    return true;
  }
}

// Sobre escribe una pregunta en particular
function totalOverwrite($questionId, $question){
  if (getQuestionById($questionId)===null){
    return false;
  }else{
    $questions=getQuestionsDecode();
    $questions[$questionId]=[
      "id" => $questionId,
      "category" => $question["category"],
      "level" => $question["level"],
      "question" => $question["question"],
      "answer_1" => $question["answer_1"],
      "answer_2" => $question["answer_2"],
      "answer_3" => $question["answer_3"],
      "answer_4" => $question["answer_4"],
      "answer_right" => $question["answer_right"]
    ];
    writeQuestions($questions);
    return true;
  }
}

function writeQuestions($questions){
  global $file;
  file_put_contents($file,json_encode($questions));
}
?>
