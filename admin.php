<!DOCTYPE html>
<?php
//if($_SESSION===null){
//  header('Location: login.php');
//  exit;
//}
include_once("./php/model/parts.php");
include_once("./php/dbm/dbmQuestions.php");
include_once("./php/entities/Question.php");

$tittle="Administración - ABM";

$save=null;
$qId = isset($_POST["id"]) ? $_POST['id'] : null;
$qCategory = isset($_POST["category"]) ? $_POST['category'] : null;
$qLevel = isset($_POST["level"]) ? $_POST['level'] : null;
$qQuestion = isset($_POST["question"]) ? $_POST['question'] : null;
$qAnswer_1 = isset($_POST["answer_1"]) ? $_POST['answer_1'] : null;
$qAnswer_2 = isset($_POST["answer_2"]) ? $_POST['answer_2'] : null;
$qAnswer_3 = isset($_POST["answer_3"]) ? $_POST['answer_3'] : null;
$qAnswer_4 = isset($_POST["answer_4"]) ? $_POST['answer_4'] : null;
$qAnswerRight = isset($_POST["answer_right"]) ? $_POST['answer_right'] : null;

function validateAllParameters(){
  if (isset($_POST["category"]) &&
    isset($_POST["level"]) &&
    isset($_POST["question"]) &&
    isset($_POST["answer_1"]) &&
    isset($_POST["answer_2"]) &&
    isset($_POST["answer_3"]) &&
    isset($_POST["answer_4"]) &&
    isset($_POST["answer_right"])
  ){
    return true;
  }
  return false;
}

function setNewQuestion(){
  return new Question($_POST["category"],$_POST["level"],$_POST["question"],$_POST["answer_1"],$_POST["answer_2"],$_POST["answer_3"],$_POST["answer_4"],$_POST["answer_right"]);
}


function añadirPregunta(){
  if (validateAllParameters()){
    if (DBMQuestions::getInstance()->addQuestion(setNewQuestion())){
      global $save ;
      $save = '<h5>Guardado!</h5>';
    }
  }
}


if ($_POST) {
  if (isset($_POST["buscar"])){
    $question=DBMQuestions::getInstance()->getQuestionById($_POST["id_seek"]);
    if ($question !== null){
      $qId = $question["id"];
      $qCategory = $question["category"];
      $qLevel = $question["level"];
      $qQuestion = $question["question"];
      $qAnswer_1 = $question["answer_1"];
      $qAnswer_2 = $question["answer_2"];
      $qAnswer_3 = $question["answer_3"];
      $qAnswer_4 = $question["answer_4"];
      $qAnswerRight = $question["answer_right"];
    }
  }
  if (isset($_POST["new"])){
    if (DBMQuestions::getInstance()->getQuestionById($_POST["id"])==null ) {
      añadirPregunta();
    }
    header('Location: admin.php');
    exit;
  }
  if (isset($_POST["mod"]) && (DBMQuestions::getInstance()->getQuestionById($_POST["id"])!==null)){
    if ($_POST["mod"]=='all') {
      if (validateAllParameters()){
        DBMQuestions::getInstance()->totalOverwrite($_POST["id"],setNewQuestion());
      }
    }else{
      if (isset($_POST[$_POST["mod"]])){
        DBMQuestions::getInstance()->partialyOverwrite($_POST["id"],$_POST["mod"],$_POST[$_POST["mod"]]);
      }
    }
  }
}




?>
<html lang="es" dir="ltr">
  <head>
    <?php Parts::head_of() ?>
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php Parts::header_of($tittle) ?>
    <main class="container">
      <section class="ABM_PREGUNTAS">
        <?php Parts::OpenPlotCenterMd(12); ?>
        <h4>Alta, baja y modificación de Preguntas</h4>
        <?php Parts::ClosePlotCenterMd(); ?>

        <form action="admin.php" method="post" class="container" enctype="multipart/form-data">
          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="id_seek">Buscar por identificador</label>
              <input name="id_seek" id="id_seek" type="number" class="form-control" required>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>
          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="buscar">Buscar</button>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>
        </form>

        <br>
        <br>

        <form action="admin.php" method="post" class="container" enctype="multipart/form-data">
          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col-4">
              <label for="id">ID</label>
            </div>
            <div class="col-4">
              <label for="level">Nivel</label>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>
          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col-4">
              <input name="id" id="id" value='<?= $qId ?>' type="number" class="form-control" readonly>
            </div>
            <div class="col-4">
              <input name="level" id="level" value='<?= $qLevel ?>' type="number" class="form-control" maxlength="4" required>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>
          <br>

          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="category">Categoria</label>
              <select name="category" id="category" class="form-control" required>
                <?php foreach ($categories as $cat) {
                  if ($cat==$qCategory) {
                    echo '<option value ="' . $cat . '" selected>' . $cat . '</option>';
                  }else{
                    echo '<option value ="' . $cat . '">' . $cat . '</option>';
                  }
                }
                ?>
              </select>
            </div>

            <div class="form-group align-self-end mb-0">
              <button type="submit" class="btn btn-primary" name="mod" value="category">Modificar</button>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>
          <br>

          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="question">Pregunta</label>
              <textarea name="question" id="question" rows="4" class="form-control" maxlength="200" required><?= $qQuestion ?></textarea>
            </div>
            <div class="form-group align-self-end mb-0">
              <button type="submit" class="btn btn-primary" name="mod" value="question">Modificar</button>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>
          <br><br>

          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="answer_1">Respuesta nº1</label>
              <textarea name="answer_1" id="answer_1" rows="3" class="form-control" maxlength="200" required><?= $qAnswer_1 ?></textarea>
            </div>
            <div class="form-group align-self-end mb-0">
              <button type="submit" class="btn btn-primary" name="mod" value="answer_1">Modificar</button>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>

          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="answer_2">Respuesta nº2</label>
              <textarea name="answer_2" id="answer_2" rows="3" class="form-control" maxlength="200" required><?= $qAnswer_2 ?></textarea>
            </div>
            <div class="form-group align-self-end mb-0">
              <button type="submit" class="btn btn-primary" name="mod" value="answer_2">Modificar</button>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>

          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="answer_3">Respuesta nº3</label>
              <textarea name="answer_3" id="answer_3" rows="3" class="form-control" maxlength="200" required><?= $qAnswer_3 ?></textarea>
            </div>
            <div class="form-group align-self-end mb-0">
              <button type="submit" class="btn btn-primary" name="mod" value="answer_3">Modificar</button>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>

          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="answer_4">Respuesta nº4</label>
              <textarea name="answer_4" id="answer_4" rows="3" class="form-control" maxlength="200" required><?= $qAnswer_4 ?></textarea>
            </div>
            <div class="form-group align-self-end mb-0">
              <button type="submit" class="btn btn-primary" name="mod" value="answer_4">Modificar</button>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>
          <br>

          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="answer_4">Respuesta correcta</label>
              <select name="answer_right" id="answer_right" class="form-control" required>
                <?php
                for ($i=1; $i < 5; $i++) {
                  if ($i==(int)$qAnswerRight) {
                    echo '<option value ="' . $i . '" selected>Respuesta nº' . $i . '</option>';
                  }else{
                    echo '<option value ="' . $i . '">Respuesta nº' . $i . '</option>';
                  }
                }
                ?>
              </select>
            </div>
            <div class="form-group align-self-end mb-0">
              <button type="submit" class="btn btn-primary" name="mod" value="answer_right">Modificar</button>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>

          <?php Parts::OpenPlotCenterMd(12); ?>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="new">Nueva pregunta</button>
              <button type="submit" class="btn btn-primary" name="mod" value="all">Sobreescribir todo</button>
              <button type="reset" class="btn btn-primary">Limpiar</button>
            </div>
          <?php Parts::ClosePlotCenterMd(); ?>

          <?php Parts::OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <?= $save ?>
            </div>
          </div>
          <?php Parts::ClosePlotCenterMd(); ?>


        </form>
      </section>
    </main>
    <?php Parts::footer_of(); ?>
  </body>
</html>
