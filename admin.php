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
$qId = isset($_POST["category"]) ? $_POST['category'] : null;
$qId = isset($_POST["level"]) ? $_POST['level'] : null;
$qId = isset($_POST["question"]) ? $_POST['question'] : null;
$qId = isset($_POST["answer_1"]) ? $_POST['answer_1'] : null;
$qId = isset($_POST["answer_2"]) ? $_POST['answer_2'] : null;
$qId = isset($_POST["answer_3"]) ? $_POST['answer_3'] : null;
$qId = isset($_POST["answer_4"]) ? $_POST['answer_4'] : null;
$qId = isset($_POST["answer_right"]) ? $_POST['answer_right'] : null;

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
          <?php OpenPlotCenterMd(6); ?>
            <h4>Formulario de registro</h4>
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(6); ?>
          <?php OpenPlotCenterMd(1); ?>
            <input name="id" id="id" value='<?= $qId ?>' type="number" class="form-control" readonly>
          <?php ClosePlotCenterMd(); ?>
          <?php OpenPlotCenterMd(4); ?>

            <input name="category" id="category" value='<?= $qCategory ?>' type="text" class="form-control" maxlength="50" required>
          <?php ClosePlotCenterMd(); ?>
          <?php OpenPlotCenterMd(1); ?>
            <input name="level" id="level" value='<?= $qLevel ?>' type="number" class="form-control" maxlength="4" required>
          <?php ClosePlotCenterMd(); ?>
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(6); ?>
            <input name="question" id="question" type="text" value='<?= $email ?>' class="form-control" placeholder="Máximo 150 caracteres" maxlength="150" required>
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(6); ?>
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
