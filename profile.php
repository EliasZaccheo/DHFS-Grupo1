<!DOCTYPE html>
<?php include_once("./php/parts.php") ?>
<?php $tittle="Perfil de usuario"; ?>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=3">
    <?php head_of() ?>
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php header_of($tittle) ?>
    <main class="container">
    </main>
    <body bgcolor="#E6E6FA">
      <div class="header">
      <img
      class="avatar"
      src="img/perfil.jpg"
      />
        <h1 class="user-name"> Agusto_f20 </h1>
      <ul class="socials">
        <li>
          <i class="icon email"></i>
          <a href="mailto:fagusto@gmail.com">fagusto@gmail.com</a>
        </li>
        <li>
          <i class="icon facebook"></i>
        <a href="https://facebook.com/fagusto">FernandezAgusto</a>
       </li>
    </ul>
    <div class="about">
      <h3> Nivel 10 (Novato) </h3>
      <p class="clasificacion">
      <input id="radio1" type="radio" name="estrellas" value="5"><!--
      --><label for="radio1">★</label><!--
      --><input id="radio2" type="radio" name="estrellas" value="4"><!--
      --><label for="radio2">★</label><!--
      --><input id="radio3" type="radio" name="estrellas" value="3"><!--
      --><label for="radio3">★</label><!--
      --><input id="radio4" type="radio" name="estrellas" value="2"><!--
      --><label for="radio4">★</label><!--
      --><input id="radio5" type="radio" name="estrellas" value="1"><!--
      --><label for="radio5">★</label>
    </p>
    </form>
    <br>
    <br>
      <p>
        Te quedan 4 niveles para llegar a principiante.
        ¡Conviértete en VIP y gana puntos más rápido!
      </p>
        </div>

      <div id="progress">
          <span id="percent"></span>
          <div id="bar"></div>
        </div>
    <a class="boton_personalizado" href="">SER VIP</a>
  </body>
  </html>
<?php footer_of(); ?>


<style>

.header {
text-align: center;
background-color: #2e518b;
padding: 20px;
height: 500px;
}
.avatar {
  width: 200px;
  height: 200px;
  border-radius: 50%;
}
.user-name {
  font-size: 50px;
  margin-top: 20px;
  color:#ffffff; // color blanco//
  }
.socials {
  list-style:none;
  text-align:center;
  padding:0;
}
.socials li{
  display: inline-block;
  margin: 10px;
}
a{
  text-decoration: none;
  color:#ffffff;
}
a:hover {
  color: #ffffff;
}
.icon {
  width: 20px;
  height: 20px;
  display: inline-block;
  background-size: cover;
}
.email{
  background-image: url("img/gmail.png");
}

.facebook{
background-image: url("img/facebook.png");
}
#form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 50px;
}

input[type="radio"] {
  display: none;
}

label {
  color:#ffbf00;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}
.about {
padding: 10px;
text-align: left;
}
.about h3 {
  color: #ffffff;
  font-size: 40px;
  }
.about p {
  color: #000000;
  font-size: 20px;
  }

  #progress {
 width: 500px;
 border:2px solid #45A7DC;
 position: relative;
 padding: 3px;
}

#percent {
 position: absolute;
 left: 50%;
}

#bar {
 height: 20px;
 background-color:#2e518b;
 width: 70%;
}

.boton_personalizado {   /*este es el boton de ser vip*/
  text-decoration: none;
  padding: 10px;
  font-size: 20px;
  color: #ffffff;
  background-color: #2e518b;
  border-radius: 6px;
  border: 2px solid #45A7DC;
  position: relative;
  bottom: 30px;
  }

</style>
