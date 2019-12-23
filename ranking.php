<!DOCTYPE html>
<?php include_once("./php/model/parts.php") ?>
<?php include_once("./php/model/rank_functions.php") ?>
<?php $tittle="Ranking"; ?>
<html lang="es" dir="ltr">
  <head>
    <?php Parts::head_of() ?>
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php Parts::header_of($tittle) ?>
    <main class="container">
      <section class="RANKING">
        <?php Parts::penPlotCenterMd(12) ?>
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
              <?php RankTools::getInstance()->showRankAll(); ?>
            </tbody>
          </table>
        </div>
        <?php Parts::ClosePlotCenterMd() ?>
      </section>
    </main>
    <?php Parts::footer_of(); ?>
  </body>
</html>
