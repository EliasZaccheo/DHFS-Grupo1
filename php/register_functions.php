<?php

function usernameValidate($username){
  global $usernamePop;
  if ((strlen($username)<6) ||
      (strlen($username)>50)){
    $usernamePop = dangerAlert("El username debe tener entre 6 y 50 caracteres.");
    return false;
  }else{
    if (findUserByUsername($username) !== null){
      $usernamePop = dangerAlert("El username elegido ya está en uso.");
      return false;
    }else{
      $usernamePop = null;
      return true;
    }
  }
}

function emailValidate($email){
  global $emailPop;
  if ( !(filter_var($email,FILTER_VALIDATE_EMAIL)) || (strlen($email)>100)) {
    $emailPop = dangerAlert("Se requiere un email con no más de 100 caracteres.");
    return false;
  }else{
    if (findUserByEmail($email) !== null){
      $emailPop = dangerAlert("Este email ya está en uso.");
      return false;
    }else{
      return true;
      $emailPop = null;
    }
  }
}

function passwordValidate($pass1,$pass2){
  global $passwordPop;
  if ((strlen($pass1)>50) ||
  (strlen($pass1)<6) ||
  (strlen($pass2)>50) ||
  (strlen($pass2)<6)){
    $passwordPop=dangerAlert("La contraseña debe tener entre 6 y 50 caracteres.");
    return false;
  }else{
    if (strcmp($pass1,$pass2)!==0){
      $passwordPop = dangerAlert("Las contraseñas no coinciden");
      return false;
    }
    $passwordPop=null;
    return true;
  }
}

function validateImg($id_img){
  global $profileImagePop;
  if ($_FILES[$id_img]["error"] === UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES[$id_img]["name"], PATHINFO_EXTENSION);
    if (($ext !== "jpg") && ($ext !== "jpeg") && ($ext !== "JPG") && ($ext !== "JPEG") && ($ext !== "png") && ($ext !== "PNG")){
      $profileImagePop=dangerAlert("Solo se aceptan formatos jpg, jpeg y png");
      return false;
    }else{
      $profileImagePop=null;
      return true;
    }
  }else{
    $profileImagePop=dangerAlert("Error al subir la imágen.");
    return false;
  }
}

function uploadImage($id_img,$name){
  $ext = pathinfo($_FILES[$id_img]["name"], PATHINFO_EXTENSION);
  $pathfile = "img/usersProfiles/" . $name . "." . $ext;
  //$pathfile = dirname(__FILE__) . "/img/userProfile/" . $name . "." . $ext;
  move_uploaded_file($_FILES[$id_img]["tmp_name"],$pathfile);
  return $pathfile;
}



// Chequea la validez de una fecha. False si no es válida. La fecha debe ser aaaa/mm/dd
function checkbirth($date){
  global $userBirthPop;
  if (substr_count($date, '/') == 2) {
    list($y, $m, $d) = explode('/', $date);
  }else{
    if (substr_count($date, '-') == 2) {
      list($y, $m, $d) = explode('-', $date);
    }
  }
  if (isset($y)){
    if (checkdate($m, $d, sprintf('%04u', $y)) && true ) {
      $userBirthPop=null;
      return true;
    }
  }
  $userBirthPop="Fecha inválida. $date";
  return false;
}


function dangerAlert($content){
  return '<div class="alert alert-danger" role="alert">' . $content . '</div>';
}


//Funciones en desuso
function dateCompare($aDate){
  $actualDate = strtotime(date("d-m-Y H:i:00",time()));

  if($actualDate > $aDate){
  	return true;
  }else{
    return false;
  }
}


function checkbirth2($date){
  if ((null !==(validateDate($date, 'Y-m-d')))&&true){
    return true;
  }
  return false;
}

function validateDate($date, $format = 'Y-m-d H:i:s'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}


?>
