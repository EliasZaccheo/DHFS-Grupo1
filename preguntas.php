<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PREGUNTAS</title>
  <a name="top-page"></a>    <!-- Ancla del formulario de contacto -->
        <nav>
              <a href="./home.php">HOME</a>
              <a href="./faq.php">PREGUNTAS FRECUENTES</a>
              <a href="./register.php">REGISTRO</a>
              <a href="./login.php">LOGIN</a>
              <a href="./faq.php#contacto">CONTACTO</a>
        </nav>
</head>
<h1 class="user-name"> HISTORIA </h1>
<div class="contenedor">
    <img src="img/historia.jpg" alt="" class="imagen-about-us" width="20%">
	</div>
<body>
	<div id="body">
		<div class="subapartado">

			<div class="pregunta">
				<p class="pregunta"> 1.- ¿Qué hazaña está asociada al nombre del general Cartaginés Anibal Barca?</p>
			</div>
      <div class="info">
			<div class="respuesta">
        <input type="radio" name="preg1" value="1" /> La conquista de Egipto y Persia <br />
    <input type="radio" name="preg1" value="2" /> La Conquista de Troya <br />
    <input type="radio" name="preg1" value="3" /> El cruce de los Alpes a lomo de elefante <br />
			</div>

		</div>

		<div class="subapartado">

			<div class="pregunta">
				<p class="pregunta"> 2.- ¿Quien fue el general espartano que resistió los embates persas con un puñado de hombres en el desfiladero de las Termópilas (s.V.a.C.)?</p>
			</div>
      <div class="info">
        <div class="respuesta">
      <input type="radio" name="preg2" value="1" />León <br />
      <input type="radio" name="preg2" value="2" />Arquelao <br />
      <input type="radio" name="preg2" value="3" />Leónidas <br />
    </div>
			</div>

		</div>

		<div class="subapartado">

			<div class="pregunta">
				<p class="pregunta"> 3.- Alejandro Magno, que a los 33 años habia conquistado casi todo el mundo conocido en su época, tuvo por maestro de lujo a un célebre filósofo. ¿Quién era? </p>
			</div>

			<div class="info">
				<div class="respuesta">
          <input type="radio" name="preg3" value="1" />Diógenes<br/>
          <input type="radio" name="preg3" value="2" />Aristóteles<br />
          <input type="radio" name="preg3" value="3" />Demócrito <br />
        </div>
			</div>

		</div>

		<div class="subapartado">

			<div class="pregunta">
				<p class="pregunta"> 4.- Conquistó Europa hasta el Danubio y más allá, poniendo en jaque a Occidente. Fue llamado “Azote de Dios”. Era un rey bárbaro llamado:</p>
			</div>

			<div class="info">
				<div class="respuesta">
          <input type="radio" name="preg4" value="1" />Atila (huno)<br/>
          <input type="radio" name="preg4" value="2" />Alarico (Visigodo)<br />
          <input type="radio" name="preg4" value="3" />Clodoveo (franco) <br />
        </div>
			</div>

		</div>

	</div>
</div>
<div style="text-align: center;">
    <button style="position: relative;top: 50%;">
      <input class="button" type="button" value="Resultado" onclick="comprobar()">
</div>
<h2 class="titulo-final">&copy; Wise Game | Copyright </h2>
</body>

<style>
*{
	margin:0px;
	padding:0px;
	font-family: raleway;
  font-size: 15px;
}
nav{
    text-align: right;
    padding: 30px 50px 0 0;
}

nav > a{
    color:#ffffff;
    font-weight: 300;
    text-decoration: none;
    margin-right: 10px;
}

nav > a:hover{
    text-decoration: underline;
}
.user-name {
  font-size: 50px;
  margin-top: 10px;
  color:#fff; // color blanco//
  }
	main .contenedor{
	    padding: 30px 0 60px 0;
	}
	.contenedor{
	    display: flex;
	    justify-content: space-evenly;
	}
html,body{
	background-color: #2e518b;
}

div#body{
	margin:100px auto;
	width:600px;
	min-height:50px;
	background-color: red;
	overflow: hidden;
	border-radius: 10px;
}

div.subapartado{
	width:600px;
	min-height:50px;
	background-color: green;
	-webkit-transiton: height 0.2s;
}

div.pregunta{
	width:600px;
	height:50px;
	background-color: #24c06f;
	overflow: hidden;
	border-bottom: 1px solid #39f58f;
}

p.pregunta{
	margin:13px;
	color: white;
}

div.info{
	width:600px;
	height:0px;
	background-color: #E6E6FA;
	overflow: hidden;
	-webkit-transition: height 0.2s;
}

p.respuesta{
	margin:20px;
	text-align: center;
	color:#4f4f4f;
}

div.subapartado:hover div.info{

	height:180px;

}
.button{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #45DC67;
    border-radius: 6px;
    border: 2px solid #2e518b;
  }
	.titulo-final{
			font-size: 20px;
			color: white;

	}
</style>
