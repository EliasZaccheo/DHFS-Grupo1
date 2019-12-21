<?php

abstract class DataBaseManager
{

  private $source;

  function __construct($source){
    $this->source=$source;
  }

  function writeSource($request){
    global $source;
    file_put_contents($source,json_encode($request));
  }

  function getSourceDecode(){
    global $source;
    $fileOpen = file_get_contents($source);
    if ($fileOpen){
      $answer = json_decode($fileOpen,true);}
    else{
      $answer=[];
    }
    return $answer;
  }

  public function getSource(){
    return $this->source;
  }

  public function setSource($source){
    $this->source = $source;
    return $this;
  }

}


 ?>
