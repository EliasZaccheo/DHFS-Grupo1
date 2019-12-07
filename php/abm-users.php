<?php
$file = "./json/users.json";
$defaultimg= "img/usersProfiles/unknown.png";

// Añade un usuario con los campos username,email,password,user-birth y profile-image (opcional la ultima)
function addUser($user){
  if ($user){
    $users=getUsersDecode();
    $users[]=[
      "username" => $user["username"],
      "email" => $user["email"],
      "password" => password_hash($user["passwordCreate"],PASSWORD_DEFAULT),
      "user-birth" => $user["user-birth"],
      "profile-image" => $user["profile-image"]
    ];
    global $file;
    file_put_contents($file,json_encode($users));
    return true;
  }else{
    return false;
  }
}

// Retorna un array con los usuarios almacenados
function getUsersDecode(){
  global $file;
  $fileOpen = file_get_contents($file);
  if ($fileOpen){
    $users = json_decode($fileOpen,true);}
  else{
    $users=[];
  }
  return $users;
}

// Busca y retorna un usuario por username, si existe.
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
$usuarios = getUsersDecode();
for ($i=0; $i < count($usuarios); $i++) { 
   foreach ($usuarios[$i] as $key => $value){
    if($value==$email){
      return true;
      break;}
    } return false;
}
 
}

// Busca y retorna un usuario por email, si existe.
function findUserByEmail($email){
  $users=getUsersDecode();
  foreach ($users as $user) {
    if ($user["email"]==$email){
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
