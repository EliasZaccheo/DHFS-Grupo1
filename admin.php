<!DOCTYPE html>
<?php
//if($_SESSION===null){
//  header('Location: login.php');
//  exit;
//}
include_once("./php/parts.php");
include_once("./php/abm-questions.php");
$tittle="Administración - ABM";
$qId=null;
$qCategory=null;
$qLevel=null;
$qQuestion=null;
$qAnswer_1=null;
$qAnswer_2=null;
$qAnswer_3=null;
$qAnswer_4=null;
$qAnswerRight=null;




$qId = isset($_POST["id"]) ? $_POST['id'] : null;
$qCategory = isset($_POST["category"]) ? $_POST['category'] : null;
$qLevel = isset($_POST["level"]) ? $_POST['level'] : null;
$qQuestion = isset($_POST["question"]) ? $_POST['question'] : null;
$qAnswer_1 = isset($_POST["answer_1"]) ? $_POST['answer_1'] : null;
$qAnswer_2 = isset($_POST["answer_2"]) ? $_POST['answer_2'] : null;
$qAnswer_3 = isset($_POST["answer_3"]) ? $_POST['answer_3'] : null;
$qAnswer_4 = isset($_POST["answer_4"]) ? $_POST['answer_4'] : null;
$qAnswerRight = isset($_POST["answer_right"]) ? $_POST['answer_right'] : null;

?>
<html lang="es" dir="ltr">
  <head>
    <?php head_of() ?>
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php header_of($tittle) ?>
    <main class="container">
      <section class="ABM_PREGUNTAS">
        <form action="admin.php" method="post" class="container" enctype="multipart/form-data">
          <?php OpenPlotCenterMd(12); ?>
            <h4>Alta, baja y modificación de Preguntas</h4>
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col-4">
              <label for="id">ID</label>
            </div>
            <div class="col-4">
              <label for="level">Nivel</label>
            </div>
          </div>
          <?php ClosePlotCenterMd(); ?>
          <?php OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col-4">
              <input name="id" id="id" value='<?= $qId ?>' type="number" class="form-control" readonly>
            </div>
            <div class="col-4">
              <input name="level" id="level" value='<?= $qLevel ?>' type="number" class="form-control" maxlength="4" required>
            </div>
          </div>
          <?php ClosePlotCenterMd(); ?>
          <br>

          <?php OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="category">Categoria</label>
              <select name="category" id="category" class="form-control" required>
                <?php foreach ($categories as $cat) {
                  if ($cat==$qCategory) {
                    echo '<option value ="' . $cat . ' selected">' . $cat . '</option>';
                  }else{
                    echo '<option value ="' . $cat . '">' . $cat . '</option>';
                  }
                }
                ?>
              </select>
            </div>
            <div class="form-group ">
              <button type="submit" class="btn btn-primary" name="mod" value="category">Modificar</button>
            </div>
          </div>
          <?php ClosePlotCenterMd(); ?>
          <br>

          <?php OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="question">Pregunta</label>
              <textarea name="question" id="question" rows="4" class="form-control" maxlength="150" required><?= $qQuestion ?></textarea>
            </div>
            <div class="form-group ">
              <button type="submit" class="btn btn-primary" name="mod" value="question">Modificar</button>
            </div>
          </div>
          <?php ClosePlotCenterMd(); ?>
          <br><br>

          <?php OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="answer_1">Respuesta nº1</label>
              <textarea name="answer_1" id="answer_1" rows="3" class="form-control" maxlength="150" required><?= $qAnswer_1 ?></textarea>
            </div>
            <div class="form-group ">
              <button type="submit" class="btn btn-primary" name="mod" value="answer_1">Modificar</button>
            </div>
          </div>
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="answer_2">Respuesta nº2</label>
              <textarea name="answer_2" id="answer_2" rows="3" class="form-control" maxlength="150" required><?= $qAnswer_2 ?></textarea>
            </div>
            <div class="form-group ">
              <button type="submit" class="btn btn-primary" name="mod" value="answer_2">Modificar</button>
            </div>
          </div>
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="answer_3">Respuesta nº3</label>
              <textarea name="answer_3" id="answer_3" rows="3" class="form-control" maxlength="150" required><?= $qAnswer_3 ?></textarea>
            </div>
            <div class="form-group ">
              <button type="submit" class="btn btn-primary" name="mod" value="answer_3">Modificar</button>
            </div>
          </div>
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="answer_4">Respuesta nº4</label>
              <textarea name="answer_4" id="answer_4" rows="3" class="form-control" maxlength="150" required><?= $qAnswer_4 ?></textarea>
            </div>
            <div class="form-group ">
              <button type="submit" class="btn btn-primary" name="mod" value="answer_4">Modificar</button>
            </div>
          </div>
          <?php ClosePlotCenterMd(); ?>
          <br>

          <?php OpenPlotCenterMd(12); ?>
          <div class="row">
            <div class="col">
              <label for="answer_4">Respuesta nº4</label>
              <select name="answer_right" id="answer_right" class="form-control" required>
                <option value=1 selected>Respuesta nº1</option>
                <option value=2>Respuesta nº2</option>
                <option value=3>Respuesta nº3</option>
                <option value=4>Respuesta nº4</option>
              </select>
            </div>
            <div class="form-group ">
              <button type="submit" class="btn btn-primary" name="mod" value="answer_right">Modificar</button>
            </div>
          </div>
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(12); ?>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Sobreescribir todo</button>
              <button type="reset" class="btn btn-primary">Limpiar</button>
            </div>
          <?php ClosePlotCenterMd(); ?>



        </form>
      </section>
    </main>
    <?php footer_of(); ?>
  </body>
</html>
