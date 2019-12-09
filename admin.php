<!DOCTYPE html>
<?php include_once("./php/parts.php") ?>
<?php $tittle="Administración - ABM"; ?>
<?php
if(isset($_POST[ ´login-email´],$_POST[ ´password´] )){

}
<html lang="es" dir="ltr">
  <head>
    <?php head_of() ?>
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php header_of($tittle) ?>
    <main class="container">
      <section class="LOGIN">
        <form action="validate.php" method="post" >
        <?php OpenPlotCenterMd(6); ?>
          <h4>BIENVENIDO ADMINISTRADOR</h4>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input name="login-email" id="login-email" type="email" class="form-control" placeholder="email@ejemplo.com" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
        <?php ClosePlotCenterMd(); ?>

        <?php OpenPlotCenterMd(6); ?>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <button type="reset" class="btn btn-primary">Desconectar</button>
          </div>
        <?php ClosePlotCenterMd(); ?>

        </form>
      </section>
    </main>
    <?php footer_of(); ?>
  </body>
</html>
