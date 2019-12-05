<?php
$file = "../usuarios.txt";

// Añade un usuario con los campos username,email,password,user-birth y profile-image (opcional la ultima)
function addUser($user){
  if ($user){
     if ((strlen($user["username"])<50) &&
        (strlen($user["username"])>0) &&
        (filter_var($user["email"],FILTER_VALIDATE_EMAIL)) &&
        (strlen($user["email"])<50) &&
        (strlen($user["pass"])<50) &&
        (strlen($user["pass"])>6) &&
        (checkbirth($user["user-birth"]))
      ){
      //$users=getUsersDecode();
      /*if ($user["profile-image"]==null){
        $user["profile-image"] = "../img/userProfile/unknown.png";
      }*/
      $fileOpen = file_get_contents("../usuarios.txt");
      $users = json_decode($fileOpen,true);
      $users[]=[
        "username" => $user["username"],
        "email" => $user["email"],
        "password" => password_hash($user["passwordCreate"],PASSWORD_DEFAULT),
        "user-birth" => $user["user-birth"],
        "profile-image" => $user["profile-image"]
      ];
      
      //global $file;
      file_put_contents("../usuarios.txt",json_encode($users));
    }
  }
}

// Retorna un array con los usuarios almacenados
function getUsersDecode(){
  global $file;
  $fileOpen = file_get_contents("../usuarios.txt");
  if ($fileOpen){
    $users = json_decode($fileOpen,true);}
  else{
    $users=[];
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

//valida que el mail pertenece a un usuario, sirve para que lo usen en todos los demas archivos
function buscarPorEmail($email) {
$usuarios = file_get_contents("../usuarios.txt");
$usuariosarray=json_decode($usuarios,true);
  foreach ($usuariosarray as $value){
    if($value["email"]==$email){
      return true;}
    } return false;
}

// Chequea la validez de una fecha. False si no es válida
function checkbirth($date){
  return true;
}
?>
