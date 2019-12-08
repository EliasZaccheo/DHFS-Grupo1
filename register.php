<!DOCTYPE html>
<?php
include_once("./php/parts.php");
include_once("./php/abm-users.php");
$tittle="Registro";

$username = null;
$userbirth = null;
$email=null;
if ($_POST){
  if ((strlen($_POST["username"])>0) &&
      (strlen($_POST["username"])<50) &&
      (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) &&
      (strlen($_POST["email"])<50) &&
      (checkbirth($_POST["user-birth"])) &&
      (strlen($_POST["passwordCreate"])<50) &&
      (strlen($_POST["passwordCreate"])>6) &&
      (strlen($_POST["passwordConfirm"])<50) &&
      (strlen($_POST["passwordConfirm"])>6) &&
      (strcmp($_POST["passwordCreate"],$_POST["passwordConfirm"]) == 0)
    ){

    $user=[
      "username" => $_POST["username"],
      "email" => $_POST["email"],
      "user-birth" => $_POST["user-birth"],
      "password" => password_hash($_POST["passwordCreate"],PASSWORD_DEFAULT)
    ];

    if ($_FILES["profile-image"]["error"] === UPLOAD_ERR_OK) {
      $name = $user["username"];
      $ext = pathinfo($_FILES["profile-image"]["name"], PATHINFO_EXTENSION);
      $pathfile = "img/usersProfiles/" . $name . "." . $ext;
      //$pathfile = dirname(__FILE__) . "/img/userProfile/" . $name . "." . $ext;
      move_uploaded_file($_FILES["profile-image"]["tmp_name"],$pathfile);
      $user["profile-image"]=$pathfile;
    }else{
      $user["profile-image"]=$defaultimg;
   }

    if (addUser($user)){
      header('Location: login.php');
      exit;
    }
  }

  $username = strlen($_POST['username'])>0 ? $_POST['username'] : null;
  $userbirth = checkbirth($_POST["user-birth"]) ? $_POST['user-birth'] : null;
  $email= filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) ? $_POST["email"] : null;
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
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input name="email" id="email" type="email" value='<?= $email ?>' class="form-control" placeholder="email@ejemplo.com" maxlength="50" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input type="password" class="form-control" name="passwordCreate" id="passwordCreate" placeholder="Contraseña" maxlength="50" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="Confirme contraseña" maxlength="50" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <label for="profile">Fecha de nacimiento</label>
          <input name="user-birth" id="user-birth" value='<?= $userbirth ?>' type="date" class="form-control"  required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <label for="profile">Imagen de perfíl</label>
          <input name="profile-image" id="profile-image" type="file" class="form-control-file">
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
