<?php

	$cases=[
    [ "question" => "1.- ¿Qué hazaña está asociada al nombre del general Cartaginés Anibal Barca?",
      "identifier" => "id_1",
      "answer" => "respuesta" ],
    [
      "question" => "2.- ¿Quien fue el general espartano que resistió los embates persas con un puñado de hombres en el desfiladero de las Termópilas (s.V.a.C.)?",
      "identifier" => "id_2",
      "answer" => "respuesta" ],

    [
      "question" => "3.- Alejandro Magno, que a los 33 años habia conquistado casi todo el mundo conocido en su época, tuvo por maestro de lujo a un célebre filósofo. ¿Quién era?",
      "identifier" => "id_3",
      "answer" => "respuesta"  ],
    [
      "question" => "4.- Conquistó Europa hasta el Danubio y más allá, poniendo en jaque a Occidente. Fue llamado “Azote de Dios”. Era un rey bárbaro llamado:",
      "identifier" => "id_4",
      "answer" => "respuesta"  ],

  ];







	function questions($cases){
	    foreach ($cases as $case) {
	      echo '
	        <p>
	          <button class="btn btn-primary w-100 p-3 " type="button" data-toggle="collapse" data-target="';
			      echo "#$case[identifier]";
			      echo '
			          " aria-expanded="false" aria-controls="';
			      echo "$case[identifier]";
			      echo '">';
			      echo "
		          $case[question]
	          </button>
	        </p>";
		      	echo '
		        <div class="collapse" id="'; echo "$case[identifier]";
					    echo '">';
					    echo '
			        <div class="card card-body">';
							echo "
								<button>$case[answer] <br>
								<button>$case[answer] <br>
								<button>$case[answer] <br>



	         	 	</div>
	         	</div>";

	    }
  }
 ?>
