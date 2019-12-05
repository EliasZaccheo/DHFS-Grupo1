<?php
$username = null;
$name=null;
$email=null;
if ($_POST){
  if ((strlen($_POST["username"])>0) &&
      (strlen($_POST["username"])<50) &&
      (filter_var($_POST["email"],FILTER_)) &&
      (strlen($_POST["email"])<50) &&
      (strlen($_POST["user-birth"])>0) &&
      (strlen($_POST["passwordCreate"])<50) &&
      (strlen($_POST["passwordCreate"])>6) &&
      (strlen($_POST["passwordConfirm"])<50) &&
      (strlen($_POST["passwordConfirm"])>6)
    ){
    $usuarios=json_decode(file_get_contents("usuarios.json"),true);
    $usuarios[]=[
      "username" => $_POST["username"],
      "email" => $_POST["email"],
      "password" => password_hash($_POST["passwordCreate"],PASSWORD_DEFAULT),
      "user-birth" => $_POST["user-birth"],
      "profile-image" => $_POST["profile-image"],
    ];
    file_put_contents("usuarios.json",json_encode($usuarios));
    echo "Bienvenido";
    //header('Location: bienvenido.php');
    //exit;
  }else{
    $name = strlen($_POST['name'])>0 ? $_POST['name'] : null;
    $username = strlen($_POST['username'])>0 ? $_POST['username'] : null;
    $email= filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) ? $_POST["email"] : null;
  }

}
?>
