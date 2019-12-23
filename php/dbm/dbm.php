<?php
/*  Abstract class */
abstract class DataBaseManager
{

  private $source;

  protected function __construct($source){
    $this->source=$source;
  }

/*  Sobre escribe la fuente con el dato enviado. Codifica antes de escribir. */
  public function setSourceEncode($request){
    global $source;
    file_put_contents($source,json_encode($request));
  }

/*  Decodifica y retorna el contenido de la fuente*/
  public function getSourceDecode(){
    global $source;
    $fileOpen = file_get_contents($source);
    if ($fileOpen){
      $answer = json_decode($fileOpen);}
    else{
      $answer=[];
    }
    return $answer;
  }

/*  Retorna la cuente */
  public function getSource(){
    return $this->source;
  }

/*  Cambia la fuente por el dato recibido por parámetro. */
  public function setSource($source){
    $this->source = $source;
    return $this;
  }

  public function getElemensCount(){
    return count($this->getSourceDecode());
  }

}


 ?>
