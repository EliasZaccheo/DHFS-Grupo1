<!DOCTYPE html>
<html>
	<?php include_once("./php/questions.php")?>
	<?php include_once("./php/parts.php") ?>
	<?php $tittle="play"; ?>
	<html lang="es" dir="ltr">
<head>
	<?php head_of() ?>
	<title>JUGUEMOS!!!!</title>
</head>
<body>
	<?php header_of("JUGUEMOS!!!") ?>
	<div class="container-fluid">
		<br>
		<div class="user">
			<!-- usuario actual-->
		</div>
		

		<div class="juego">

				<?php questions($cases); ?>		
		
				<div class="row">
					<div class="col">
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width:75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
								50%
							</div>
							<span class="sr-only">25%</span>
						</div>
						<progress value="0" max="30" id="progressBar" class="center"></progress>
						<div id="countdown" class="btn-primary text-center display-4 "></div>
						<!-- contadores echos con js y html-->
						<br><br><br>
					</div>		
				</div>	

		</div>
	</div>

	<!-- funcion de js-->
	<script type="text/javascript">
			var timeleft = 30;
			var downloadTimer = setInterval(function(){
 			document.getElementById("countdown").innerHTML =timeleft + "seg RESTANTES!!!! ";
  			timeleft -= 1;
  				if(timeleft <= 0){
    			clearInterval(downloadTimer);
    			document.getElementById("countdown").innerHTML = " JUEGO TERMINADO "}
			}, 1000);

			//contador en palabras

			var timeleft2 = 30;
			var downloadTimer = setInterval(function(){
  			document.getElementById("progressBar").value = 30 - timeleft2;
  			timeleft2 -= 1;
  			if(timeleft2 <= 0)
    		clearInterval(downloadTimer);
			}, 1000);

			//contador en barra regresiva
	</script>
</body>
</html>