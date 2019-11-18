<!DOCTYPE html>
<?php include_once("./php/parts.php") ?>
<?php $tittle="Ingreso"; ?>
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
          <h4>Ingreso</h4>
          <div class="form-group col-md-6">
            <input name="login-email" id="login-email" type="email" class="form-control" placeholder="email@ejemplo.com" required>
          </div>
          <div class="form-group col-md-6">
            <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
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
