<!DOCTYPE html>
<?php include_once("./php/parts.php") ?>
<?php $tittle="Registro"; ?>
<html lang="es" dir="ltr">
  <head>
    <?php head_of() ?>
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php header_of($tittle) ?>
    <main class="container">
      <section class="REGISTER">
        <form action="validate.php" method="post" >
          <h4>Formulario de registro</h4>
          <div class="form-group col-md-6">
            <input name="user-name" id="user-name" type="text" class="form-control" placeholder="Nombre de usuario" required>
          </div>
          <div class="form-group col-md-6">
            <input name="register-email" id="register-email" type="email" class="form-control" placeholder="email@ejemplo.com" required>
          </div>
          <div class="form-group col-md-6">
            <input type="password" class="form-control" name="passwordCreate" id="passwordCreate" placeholder="Contraseña" required>
          </div>
          <div class="form-group col-md-6">
            <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="Confirme contraseña" required>
          </div>
          <div class="form-group col-md-6">
            <label for="profile">Imagen de perfíl</label>
            <input name="profile-image" id="profile-image" type="file" class="form-control-file">
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="reset" class="btn btn-primary">Limpiar</button>
            </div>
          </div>
        </form>
      </section>
    </main>
    <?php footer_of(); ?>
  </body>
</html>
