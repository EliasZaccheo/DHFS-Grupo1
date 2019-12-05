<?php
$file = "../json/users.json"

// Añade un usuario con los campos username,email,password,user-birth y profile-image (opcional la ultima)
function addUser($user){
  if ($user){
    if ((strlen($user["username"])>0) &&
        (strlen($user["username"])<50) &&
        (filter_var($user["email"],FILTER_VALIDATE_EMAIL)) &&
        (strlen($user["email"])<50) &&
        (strlen($user["password"])<50) &&
        (strlen($user["password"])>6) &&
        (checkbirth($user["user-birth"]))
      ){
      $users=getUsersDecode();
      if ($user["profile-image"]==null){
        $user["profile-image"] = "../img/userProfile/unknown.png";
      }
      $users[]=[
        "username" => $user["username"],
        "email" => $user["email"],
        "password" => password_hash($user["passwordCreate"],PASSWORD_DEFAULT),
        "user-birth" => $user["user-birth"],
        "profile-image" => $user["profile-image"]
      }
      ];
      global $file;
      file_put_contents($file,json_encode($users));
    }
  }
}

// Retorna un array con los usuarios almacenados
function getUsersDecode(){
  global $file;
  $fileOpen = file_get_contents($file);
  if ($fileOpen){
    $users = json_decode($fileOpen,true);}
  else{
    $users=[][];
  }
  return $users;
}

// Busca y retorna un usuario, si existe.
function findUserByUsername($username){
  $users=getUsersDecode();
  foreach ($users as $user) {
    if ($user["username"]==$username){
      return $user;
    }
    return null;
  }
}

// Chequea la validez de una fecha. False si no es válida
function checkbirth($date){
  return true;
}
?>
