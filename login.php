<?php
include_once("php/model/register_functions.php");
include_once("./php/model/abm-users.php");
$userEmail=" ";

  if ($_POST) {
    $userEmail= $_POST["login-email"];
    //$userPass=password_hash($_POST["password"],PASSWORD_DEFAULT);
    $usuarios = file_get_contents("json/users.json");
    $usuariosarray=json_decode($usuarios,true);
    $email= $_POST["login-email"];

    $user= findUserByEmail($userEmail);

    /*echo $userPass."<br>";
    echo $user["password"]."<br>";*/

    if ($user["email"]==$userEmail && password_verify($_POST["password"], $user["password"])) {
      session_start();
      $_SESSION["mail"]=$userEmail;
      header('Location: home.php');
      exit;
    }else{ $emailPop = dangerAlert("Email o Contraseña incorrectos");}



  }




 ?>





<!DOCTYPE html>
<?php include_once("./php/model/parts.php") ?>
<?php $tittle="Ingreso"; ?>
<html lang="es" dir="ltr">
  <head>
    <?php Parts::head_of() ?>
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php Parts::header_of($tittle) ?>
    <main class="container">
      <section class="LOGIN">
        <form action="login.php" method="post" >
        <?php Parts::OpenPlotCenterMd(6); ?>
          <h4>Ingreso</h4>
        <?php Parts::ClosePlotCenterMd(); ?>

        <?php Parts::OpenPlotCenterMd(6); ?>
          <input name="login-email" id="login-email" type="email" class="form-control" placeholder="email@ejemplo.com" required value=" <?php echo $userEmail ?>">
        <?= isset($emailPop) ? $emailPop : null ?>
        <?php Parts::ClosePlotCenterMd(); ?>

        <?php Parts::OpenPlotCenterMd(6); ?>
          <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
        <?php Parts::ClosePlotCenterMd(); ?>

        <?php Parts::OpenPlotCenterMd(6); ?>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-primary">Limpiar</button>
          </div>
        <?php Parts::ClosePlotCenterMd(); ?>
        </form>
      </section>
    </main>
    <?php Parts::footer_of(); ?>
  </body>
</html>
