<?php 
include_once("./php/abm-users.php");
$email=" ";
$user=[];
$usuarios = file_get_contents("json/users.json");
$usuariosarray=json_decode($usuarios,true);

  if ($_POST) {
    if (buscarPorEmail($_POST["contact-email"])==true) {
      $user=[
        "email"=>$_POST["contact-email"],
        "pregunta"=>$_POST["request"],
        "imagen"=>"img/usersProfiles/unknown.png"
      ];
        $userQuest=file_get_contents("json/users-questions.json");
        $userQuestArray=json_decode($userQuest,true);
        $userQuestArray[]=$user;
        $json=json_encode($userQuestArray);
        FILE_PUT_CONTENTS("json/users-questions.json",$json);
        echo "mensaje enviado";
    }else{
        echo "email incorrecto";
        $email=$_POST["contact-email"];
    }
  }

 
 ?>



<!DOCTYPE html>
<?php include_once("./php/faq_functions.php")?>
<?php include_once("./php/parts.php") ?>
<?php $tittle="F.A.Q. - Preguntas frecuentes"; ?>
<html lang="es" dir="ltr">
  <head>
    <?php head_of() ?>
    <link rel="stylesheet" href="css/faq_styles.css">
    <title><?php echo $tittle;?></title>
  </head>
  <body >
    <?php header_of($tittle) ?>
    <main class="container">
      <section class="FAQ">
        <?php add_question($cases); ?>
      </section>
      <br>
      <br>
      <br>
      <section class="CONTACT">
        <a name="donde-estamos"></a>    <!-- Ancla de 'donde estamos' -->
        <div class="google-maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4626.520027383228!2d-57.953372836557946!3d-34.92040798308901!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1573938453425!5m2!1ses!2sar" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <h6>La Plata, Argentina.</h6>
        <br>
        <br>
        <a name="contacto"></a>    <!-- Ancla del formulario de contacto -->
        <form action="faq.php" method="post" >
          <?php OpenPlotCenterMd(6); ?>
          <h4>Formulario de contacto</h4>
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(6); ?>
            <input name="contact-email" id="contact-email" type="email" class="form-control" placeholder="nombre@ejemplo.com" required value="<?php echo $email; ?>">
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(6); ?>
            <h2>Archivo de consulta:</h2>
            <input name="contact-file" id="contact-file" type="file" class="form-control-file">
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(6); ?>
            <textarea name="request" id="request" class="form-control" rows="3" placeholder="Comentario" required></textarea>
          <?php ClosePlotCenterMd(); ?>

          <?php OpenPlotCenterMd(6); ?>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          <?php ClosePlotCenterMd(); ?>
        </form>
      </section>
    </main>
    <?php footer_of(); ?>
  </body>
</html>
