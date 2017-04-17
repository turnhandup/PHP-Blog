<?php
class PostVO{
  protected $id;
  protected $header;
  protected $date;
  protected $text;
  protected $img;

  public function setId($id){
    $this->id = $id;
  }

  public function getId(){
    return $this->id;
  }

  public function setHeader($header){
    $this->header =$header;
  }

  public function getHeader(){
    return $this->header;
  }

  public function setDate($date){
    $this->date =$date;
  }

  public function getDate(){
    return $this->date;
  }

  public function setText($text){
    $this->text=$text;
  }

  public function getText(){
    return $this->text;
  }

  public function setImg($img){
    $this->img=$img;
  }

  public function getImg(){
    return $this->img;
  }
}

?>
