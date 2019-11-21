<?php

  $cases=[
    [ "user_name" => "Tito",
      "user_gender" => "male",
      "user_age" => 12,
      "user_score" => 15 ],
    [
      "user_name" => "Tita",
      "user_gender" => "female",
      "user_age" => 13,
      "user_score" => 95 ],
    [
      "user_name" => "Tite",
      "user_gender" => "other",
      "user_age" => 16,
      "user_score" => 13 ],
    [
      "user_name" => "Fulano",
      "user_gender" => "male",
      "user_age" => 14,
      "user_score" => 37 ],
    [
      "user_name" => "Fulana",
      "user_gender" => "female",
      "user_age" => 19,
      "user_score" => 180 ],
    [
      "user_name" => "Mengano",
      "user_gender" => "male",
      "user_age" => 17,
      "user_score" => 87 ],
    [
      "user_name" => "Christine",
      "user_gender" => "other",
      "user_age" => 17,
      "user_score" => 92 ],
    [
      "user_name" => "Ramiro",
      "user_gender" => "male",
      "user_age" => 21,
      "user_score" => 127 ],
    [
      "user_name" => "Tamara",
      "user_gender" => "female",
      "user_age" => 14,
      "user_score" => 145 ],
  ];


  function showRankAll($users){
    $usersOrder=orderUsers($users);
    arsort($usersOrder);
    foreach ($usersOrder as $key => $value ) {
      $i = 0;
      while ($users[$i]["user_name"]!=$key){
        $i++;
      }
      addRow($users[$i]);
    }
  }

  function addRow($user){
    echo'
      <tr>
        <th scope="row">1</th>';
    echo "
        <td>$user[user_score]</td>
        <td>$user[user_name]</td>
        <td>$user[user_age]</td>
      </tr>";
  }

 function orderUsers($users){
   $array=[];
   foreach ($users as $user) {
     $array[$user["user_name"]]=$user["user_score"];
   }
   return $array;
 }

 ?>
