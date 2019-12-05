<!DOCTYPE html>
<?php
include_once("./php/parts.php");
include_once("./php/abm-users.php");
$tittle="Registro";

if ($_POST) {
  $user=[
    "username"=>$_POST["username"],
    "email"=>$_POST["email"],
    "pass"=>$_POST["passwordCreate"],
    "pass2"=>$_POST["passwordConfirm"],
    "nacimiento"=>$_POST["user-birth"],
    ];

}
 if ($_FILES) {
    $user["profile-image"]=$_File["profile-image"];
    }else{
      $user["profile-image"]="img/userProfile/unknown.png";
    }
 addUser($user);
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
          <input name="username" id="username" type="text" class="form-control" placeholder="Nombre de usuario" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input name="email" id="email" type="email" class="form-control" placeholder="email@ejemplo.com" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input type="password" class="form-control" name="passwordCreate" id="passwordCreate" placeholder="Contraseña" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="Confirme contraseña" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <label for="profile">Fecha de nacimiento</label>
          <input name="user-birth" id="user-birth" type="date" class="form-control"  required>
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
