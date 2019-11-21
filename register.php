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
    <main class="container ">
      <section class="REGISTER ">
        <form action="validate.php" method="post" class="container ">

        <?php OpenPlotCenterMd(6); ?>
          <h4>Formulario de registro</h4>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input name="user-name" id="user-name" type="text" class="form-control" placeholder="Nombre de usuario" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input name="register-email" id="register-email" type="email" class="form-control" placeholder="email@ejemplo.com" required>
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
