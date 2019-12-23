<!DOCTYPE html>
<?php
include_once("./php/model/parts.php");
include_once("./php/abm-users.php");
include_once("./php/model/register_functions.php");
include_once("./php/entities/usuarios.php");
$tittle="Registro";

$username = null;
$userbirth = null;
$email=null;
$usernamePop=null;
$userBirthPop=null;
$emailPop=null;
$passwordPop=null;
$profileImagePop=null;

if ($_POST){
  if (usernameValidate($_POST["username"]) &&
      emailValidate($_POST["email"]) &&
      checkbirth($_POST["user-birth"]) &&
      passwordValidate($_POST["passwordCreate"],$_POST["passwordConfirm"])
    ){
    /*$user=[
      "username" => $_POST["username"],
      "email" => $_POST["email"],
      "user-birth" => $_POST["user-birth"],
      "password" => password_hash($_POST["passwordCreate"],PASSWORD_DEFAULT)
    ];*/

     $user=new usuarios($_POST["username"],$_POST["email"],"activo",password_hash($_POST["passwordCreate"],PASSWORD_DEFAULT),$_POST["user-birth"]);
    // CREACION DE OBJETO USUARIO!!!


    if (validateImg("profile-image")) {
      $user->setAvatar(uploadImage("profile-image" ,$user->getUserName()));
    }else{
      $user->setAvatar($defaultimg);
    }
    if (addUser($user)){
      session_start();
      $_SESSION["mail"]=$_POST["email"];
      header('Location: login.php');
      exit;
    }
  }

  $username = usernameValidate($_POST["username"]) ? $_POST['username'] : null;
  $userbirth = checkbirth($_POST["user-birth"]) ? $_POST['user-birth'] : null;
  $email= emailValidate($_POST["email"]) ? $_POST["email"] : null;
}

?>
<html lang="es" dir="ltr">
  <head>
    <?php Parts::head_of() ?>
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php Parts::header_of($tittle) ?>
    <main class="container ">
      <section class="REGISTER ">
        <form action="register.php" method="post" class="container" enctype="multipart/form-data">

        <?php Parts::OpenPlotCenterMd(6); ?>
          <h4>Formulario de registro</h4>
        <?php Parts::ClosePlotCenterMd(); ?>

        <?php Parts::OpenPlotCenterMd(6); ?>
          <input name="username" id="username" value='<?= $username ?>' type="text" class="form-control" placeholder="Nombre de usuario" maxlength="50" required>
          <?= isset($usernamePop) ? $usernamePop : null ?>
        <?php Parts::ClosePlotCenterMd(); ?>

        <?php Parts::OpenPlotCenterMd(6); ?>
          <input name="email" id="email" type="email" value='<?= $email ?>' class="form-control" placeholder="email@ejemplo.com" maxlength="50" required>
          <?= isset($emailPop) ? $emailPop : null ?>
        <?php Parts::ClosePlotCenterMd(); ?>

        <?php Parts::OpenPlotCenterMd(6); ?>
          <input type="password" class="form-control" name="passwordCreate" id="passwordCreate" placeholder="Contraseña" maxlength="50" required>
          <?= isset($passwordPop) ? $passwordPop : null ?>
        <?php Parts::ClosePlotCenterMd(); ?>

        <?php Parts::OpenPlotCenterMd(6); ?>
          <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="Confirme contraseña" maxlength="50" required>
        <?php Parts::ClosePlotCenterMd(); ?>

        <?php Parts::OpenPlotCenterMd(6); ?>
          <label for="profile">Fecha de nacimiento</label>
          <input name="user-birth" id="user-birth" value='<?= $userbirth ?>' type="date" class="form-control"  required>
          <?= isset($userBirthPop) ? $userBirthPop : null ?>
        <?php Parts::ClosePlotCenterMd(); ?>

        <?php Parts::OpenPlotCenterMd(6); ?>
          <label for="profile">Imagen de perfíl</label>
          <input name="profile-image" id="profile-image" type="file" class="form-control-file">
          <?= isset($profileImagePop) ? $profileImagePop : null ?>
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
