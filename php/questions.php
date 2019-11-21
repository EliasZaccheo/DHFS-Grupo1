<?php 

	$cases=[
    [ "question" => "¿¿¿Pregunta 1???",
      "identifier" => "id_1",
      "answer" => "respuesta" ],
    [
      "question" => "¿¿¿Pregunta 2???",
      "identifier" => "id_2",
      "answer" => "respuesta"  ],
    [
      "question" => "¿¿¿Pregunta 3???",
      "identifier" => "id_3",
      "answer" => "respuesta"  ],
    [
      "question" => "¿¿¿Pregunta 4???",
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