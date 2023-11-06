<?php

class Movie{
  public $title;
  public $genre;
  public $duration;
  public $image;

  public function __construct(string $_title,string $_genre,int $_duration, Media $_image = null){
    $this -> title = $_title;
    $this -> genre = $_genre;
    $this -> duration = $_duration;
    $this -> image = $_image;
  }

  public function setImage(Media $_image){
    $this -> image = $_image;
  }
} 