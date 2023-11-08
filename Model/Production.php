<?php

class Production{

  use Year;

  public $title;
  public $genre;
  public $cast;
  public $image;


  public function __construct(string $_title,string $_genre, array $_cast, Media $_image = null, int $_publication_year){
    $this -> title = $_title;
    $this -> genre = $_genre;

      if(empty($_cast)){
        throw new Exception("Mancano gli attori!");
      }else{
        $this -> cast = $_cast;
      }
    
    $this -> image = $_image;
    $this-> publication_year = $_publication_year;
  }

  public function setImage(Media $_image){
    $this -> image = $_image;
  }
  
}

