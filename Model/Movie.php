<?php

class Movie{
  public $title;
  public $genre;
  public $duration;
  public $image;

  public function _construct(string $_title,string $_genre,int $_duration, Media $_image = null){
    $this -> title = $_title;
    $this -> genre = $_genre;
    $this -> duration = $_duration;
    $this -> image = $image;
  }

  public function setImage(Media $_image){
    $this -> image = $_image;
  }
} 