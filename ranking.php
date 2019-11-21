<!DOCTYPE html>
<?php include_once("./php/parts.php") ?>
<?php include_once("./php/rank_functions.php") ?>
<?php $tittle="Ranking"; ?>
<html lang="es" dir="ltr">
  <head>
    <?php head_of() ?>
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php header_of($tittle) ?>
    <main class="container">
      <section class="RANKING">
        <?php OpenPlotCenterMd(12) ?>
        <div class="table-responsive-sm">
          <table class="table table-hover table-primary">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Puntaje</th>
                <th scope="col">Usuario</th>
                <th scope="col">Edad</th>
              </tr>
            </thead>
            <tbody>
              <?php showRankAll($cases); ?>
            </tbody>
          </table>
        </div>
        <?php ClosePlotCenterMd() ?>
      </section>
    </main>
    <?php footer_of(); ?>
  </body>
</html>
