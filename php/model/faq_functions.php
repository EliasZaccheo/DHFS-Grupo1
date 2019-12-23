<?php

  $cases=[
    [ "question" => "Pregunta 1",
      "identifier" => "id_1",
      "answer" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ],
    [
      "question" => "Pregunta 2",
      "identifier" => "id_2",
      "answer" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ],
    [
      "question" => "Pregunta 3",
      "identifier" => "id_3",
      "answer" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ],
    [
      "question" => "Pregunta 4",
      "identifier" => "id_4",
      "answer" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ],

  ];


  function add_question($cases){
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
        <div class="collapse" id="';
      echo "$case[identifier]";
      echo '">';
      echo '
          <div class="card card-body">';
      echo "
            $case[answer]
          </div>
        </div>";
    }
  }
 ?>
