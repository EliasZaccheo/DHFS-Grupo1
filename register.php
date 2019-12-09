<!DOCTYPE html>
<?php
include_once("./php/parts.php");
include_once("./php/abm-users.php");
include_once("./php/register_functions.php");
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
    $user=[
      "username" => $_POST["username"],
      "email" => $_POST["email"],
      "user-birth" => $_POST["user-birth"],
      "password" => password_hash($_POST["passwordCreate"],PASSWORD_DEFAULT)
    ];
    if (validateImg("profile-image")) {
      $user["profile-image"]=uploadImage("profile-image" ,$user["username"]);
    }else{
      $user["profile-image"]=$defaultimg;
    }
    if (addUser($user)){
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
    <?php head_of() ?>
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php header_of($tittle) ?>
    <main class="container ">
      <section class="REGISTER ">
        <form action="register.php" method="post" class="container" enctype="multipart/form-data">

        <?php OpenPlotCenterMd(6); ?>
          <h4>Formulario de registro</h4>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input name="username" id="username" value='<?= $username ?>' type="text" class="form-control" placeholder="Nombre de usuario" maxlength="50" required>
          <?= isset($usernamePop) ? $usernamePop : null ?>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input name="email" id="email" type="email" value='<?= $email ?>' class="form-control" placeholder="email@ejemplo.com" maxlength="50" required>
          <?= isset($emailPop) ? $emailPop : null ?>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input type="password" class="form-control" name="passwordCreate" id="passwordCreate" placeholder="Contraseña" maxlength="50" required>
          <?= isset($passwordPop) ? $passwordPop : null ?>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="Confirme contraseña" maxlength="50" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <label for="profile">Fecha de nacimiento</label>
          <input name="user-birth" id="user-birth" value='<?= $userbirth ?>' type="date" class="form-control"  required>
          <?= isset($userBirthPop) ? $userBirthPop : null ?>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <label for="profile">Imagen de perfíl</label>
          <input name="profile-image" id="profile-image" type="file" class="form-control-file">
          <?= isset($profileImagePop) ? $profileImagePop : null ?>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-primary">Limpiar</button>
          </div>
        <?php ClosePlotCenterMd(); ?>
        </form>
      </section>
    </main>
    <?php footer_of(); ?>
  </body>
</html>
