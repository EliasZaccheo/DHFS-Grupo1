<?php

class Parts{

  private function __construct(){
  }

  public static function header_of($tittle){ //SAQUE EL ENLACE DE CONTACTO!!!!... 05/12... PORQUE ERA LO MISMO QUE FAQ
    echo '
      <header>
        <a name="top-page"></a>    <!-- Ancla tope de página -->
        <nav>
              <a href="./home.php">HOME</a>
              <a href="./faq.php">FAQ</a>
              <a href="./register.php">REGISTRO</a>
              <a href="./login.php">LOGIN</a>
              <a href="./faq.php#contacto">CONTACTO</a>
              <a href="./ranking.php">RANKING</a>
        </nav>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>
        <section class="textos-header">
            <h1>Wise Game</h1>';
    echo "
            <h2>$tittle</h2>
        </section>
    </header>";
    echo '
    <div class="container">
      <nav class="fixed-bottom p-3 row justify-content-end">
        <a role="button" class="btn btn-primary top-button" href="#top-page">INICIO</a>

      </nav>
    </div>
    ';
  }

  public static function footer_of(){
    echo '
      <a name="foot-page"></a>    <!-- Ancla pie de página -->
      <footer>
          <!--
          <div class="contenedor-footer">
              <div class="content-foo">
                  <h4>Phone</h4>
                  <p>+5494226-2540</p>
              </div>
              <div class="content-foo">
                  <h4>Email</h4>
                  <p>wisegame.com.ar</p>
              </div>
              <div class="content-foo">
                  <h4>Location</h4>
                  <p>Buenos Aires, Argentina</p>
              </div>
          </div>
          -->
          <h2 class="titulo-final">&copy; Wise Game | Copyright </h2>
      </footer>';
    }

  public static function head_of(){
    echo '

      <!-- https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
      <!-- css -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- js -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/styletrivia.css">
      <link rel="shortcut icon" href="img/wisegame.png" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">';
  }


  public static function OpenPlotCenterMd($col){
    echo '
    <div class="row justify-content-md-center">
      <div class=';
    echo '"form-group col-md-'.$col;
    echo '">';
  }

  public static function closePlotCenterMd(){
    echo '
      </div>
    </div>';
  }
}
?>
